<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Channels;

use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Update channel endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class UpdateChannelEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $channelId;

    /**
     * Setup channel identifier and context.
     *
     * @param int   $channelId
     * @param array $resource
     */
    public function __construct(int $channelId, array $resource)
    {
        $this->channelId = $channelId;

        // boot ...
        parent::__construct($resource);
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
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_PUT;
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): StateResponse
    {
        return new StateResponse($response);
    }
}
