<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
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
 * Channel service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class ChannelService extends Service
{
    /**
     * Retrieve given channel.
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
     * Retrieve channels.
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
     * Update given channel with in context.
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
