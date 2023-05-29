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
use SmartSender\Interaction\Endpoints\Messenger\Chats\CollectChatsEndpoint;
use SmartSender\Interaction\Responses\Messenger\Chats\CollectChatsResponse;
use SmartSender\Foundation\Resources\Source\Messenger\Chats\SelectedChatService;

/**
 * Chat service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class ChatService extends Service
{
    /**
     * Select given chat identifier.
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
     * Retrieve chats.
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
