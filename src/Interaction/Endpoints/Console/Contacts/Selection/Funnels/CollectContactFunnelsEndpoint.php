<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Funnels;

use GuzzleHttp\RequestOptions;
use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactTagsResponse;

/**
 * Collect contact funnels endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectContactFunnelsEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup contact identifier and resource.
     *
     * @param int   $contactId
     * @param array $resource
     */
    public function __construct(int $contactId, array $resource)
    {
        $this->contactId = $contactId;

        // boot ...
        parent::__construct($resource);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/funnels', $this->contactId);
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_GET;
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->context,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): CollectContactTagsResponse
    {
        return new CollectContactTagsResponse($response);
    }
}
