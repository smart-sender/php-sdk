<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction;

use JsonException;
use SmartSender\Config;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\BadResponseException;
use SmartSender\Contracts\Client as ClientContract;
use SmartSender\Exceptions\InvalidResponseException;
use GuzzleHttp\ClientInterface as HttpClientContract;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Contracts\Endpoint as EndpointContract;
use Psr\Http\Message\ResponseInterface as ResponseContract;

/**
 * API callee.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Callee
{
    /**
     * @var \SmartSender\Contracts\Client
     */
    private ClientContract $client;

    /**
     * Setup client.
     *
     * @param \SmartSender\Contracts\Client $client
     */
    public function __construct(ClientContract $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieve client.
     *
     * @return \SmartSender\Contracts\Client
     */
    public function getClient(): ClientContract
    {
        return $this->client;
    }

    /**
     * Setup client.
     *
     * @param \SmartSender\Contracts\Client $client
     *
     * @return void
     */
    public function setClient(ClientContract $client): void
    {
        $this->client = $client;
    }

    /**
     * Calling over resource.
     *
     * @param \SmartSender\Contracts\Endpoint $endpoint
     *
     * @return mixed
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function call(EndpointContract $endpoint)
    {
        try {
            // requests for endpoint
            $response = $this->process($endpoint);

            // tries to collect source
            $source = Parser::jsonDecode($response->getBody()->getContents());
        } catch (JsonException $e) {
            // decorates exception
            throw new InvalidResponseException($e->getMessage(), $e->getCode());
        }

        return $endpoint->getAdapted(new PendingResponse($source));
    }

    /**
     * Retrieve HTTP client.
     *
     * @return \GuzzleHttp\ClientInterface
     */
    protected function getHttpClient(): HttpClientContract
    {
        return new HttpClient();
    }

    /**
     * Retrieve request url.
     *
     * @param \SmartSender\Contracts\Endpoint $endpoint
     *
     * @return string
     */
    private function getRequestUrl(EndpointContract $endpoint): string
    {
        [$baseUri, $version] = Config::getInstance()->getValues('baseUri', 'version');

        return sprintf('%s/%s/%s', $baseUri, $version, $endpoint->getType());
    }

    /**
     * Enhance endpoint options.
     *
     * @param \SmartSender\Contracts\Endpoint $endpoint
     *
     * @return array
     */
    private function enhanceOptions(EndpointContract $endpoint): array
    {
        return array_merge_recursive($endpoint->getOptions(), [
            RequestOptions::HEADERS => [
                'Authorization' => sprintf('Bearer %s', $this->client->getAccessToken()),
            ],
        ]);
    }

    /**
     * Process given endpoint.
     *
     * @param \SmartSender\Contracts\Endpoint $endpoint
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    protected function process(EndpointContract $endpoint): ResponseContract
    {
        $url = $this->getRequestUrl($endpoint);

        try {
            // requests for endpoint
            return $this->getHttpClient()->request($endpoint->getMethod(), $url, $this->enhanceOptions($endpoint));
        } catch (BadResponseException $e) {
            // retrieve source
            return $e->getResponse();
        } catch (GuzzleException $e) {
            // decorates exception
            throw new InvalidResponseException($e->getMessage(), $e->getCode());
        }
    }
}
