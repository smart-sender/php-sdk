<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Channels;

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Contracts\Endpoint as EndpointContract;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Messenger\Channels\FindChannelResponse;

/**
 * Find channel endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class FindChannelEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $channelId;

    /**
     * Setup channel identifier.
     *
     * @param int $channelId
     */
    public function __construct(int $channelId)
    {
        $this->channelId = $channelId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('channels/%s', $this->channelId);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
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
    public function getAdapted(PendingResponse $response): FindChannelResponse
    {
        return new FindChannelResponse($response);
    }
}
