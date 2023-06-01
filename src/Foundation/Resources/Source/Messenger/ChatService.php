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
use SmartSender\Interaction\Endpoints\Messenger\Chats\CollectChatsEndpoint;
use SmartSender\Interaction\Responses\Messenger\Chats\CollectChatsResponse;
use SmartSender\Foundation\Resources\Source\Messenger\Chats\SelectedChatService;

/**
 * Using this API, you can get a list of created chats, get information about a chat, mark it as “read” or “close”.
 * You can also receive messages from a conversation or send a message.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676542648/Chats+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ChatService extends Service
{
    /**
     * Creates selected chat service.
     *
     * @param int $chatId
     *
     * @return \SmartSender\Foundation\Resources\Source\Messenger\Chats\SelectedChatService
     */
    public function select(int $chatId): SelectedChatService
    {
        return new SelectedChatService($this->client, $chatId);
    }

    /**
     * Allows you to view existing chats.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Chats\CollectChatsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectChatsResponse
    {
        return $this->createCallee()->call(new CollectChatsEndpoint($resource));
    }
}
