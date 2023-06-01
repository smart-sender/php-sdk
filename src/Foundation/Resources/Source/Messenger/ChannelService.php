<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Messenger;

use SmartSender\Foundation\Service;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Responses\Messenger\Channels\FindChannelResponse;
use SmartSender\Interaction\Endpoints\Messenger\Channels\FindChannelEndpoint;
use SmartSender\Interaction\Endpoints\Messenger\Channels\UpdateChannelEndpoint;
use SmartSender\Interaction\Responses\Messenger\Channels\CollectChannelsResponse;
use SmartSender\Interaction\Endpoints\Messenger\Channels\CollectChannelsEndpoint;

/**
 * Allows you to view, find and update channels within Smart Messenger (Connected Communication Channels).
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444598/Channels+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ChannelService extends Service
{
    /**
     * Allows you to view the connected channel in the project by ID.
     *
     * @param int $channelId
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Channels\FindChannelResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function find(int $channelId): FindChannelResponse
    {
        return $this->createCallee()->call(new FindChannelEndpoint($channelId));
    }

    /**
     * Allows you to view the connected channels in the project.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Channels\CollectChannelsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectChannelsResponse
    {
        return $this->createCallee()->call(new CollectChannelsEndpoint($resource));
    }

    /**
     * Allows you to change the activity of the selected channel.
     *
     * @param int   $channelId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function update(int $channelId, array $resource): StateResponse
    {
        return $this->createCallee()->call(new UpdateChannelEndpoint($channelId, $resource));
    }
}
