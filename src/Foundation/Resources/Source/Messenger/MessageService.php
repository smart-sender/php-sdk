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
use SmartSender\Interaction\Endpoints\Messenger\Messages\SendMessageEndpoint;
use SmartSender\Interaction\Responses\Messenger\Messages\SendMessageResponse;
use SmartSender\Interaction\Endpoints\Messenger\Messages\CollectMessagesEndpoint;
use SmartSender\Interaction\Responses\Messenger\Messages\CollectMessagesResponse;
use SmartSender\Interaction\Endpoints\Messenger\Messages\CollectChatMessagesEndpoint;

/**
 * Message service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class MessageService extends Service
{
    /**
     * Retrieve messages.
     *
     * @param int   $contactId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Messages\SendMessageResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function send(int $contactId, array $resource): SendMessageResponse
    {
        return $this->createCallee()->call(new SendMessageEndpoint($contactId, $resource));
    }

    /**
     * Retrieve messages.
     *
     * @param int   $contactId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Messages\CollectMessagesResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(int $contactId, array $resource): CollectMessagesResponse
    {
        return $this->createCallee()->call(new CollectMessagesEndpoint($contactId, $resource));
    }

    /**
     * Retrieve messages from chat.
     *
     * @param int   $chatId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Messages\CollectMessagesResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collectFromChat(int $chatId, array $resource): CollectMessagesResponse
    {
        return $this->createCallee()->call(new CollectChatMessagesEndpoint($chatId, $resource));
    }
}
