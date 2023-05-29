<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Messenger\Chats;

use SmartSender\Foundation\Service;
use SmartSender\Contracts\Client as ClientContract;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Endpoints\Messenger\Chats\FindChatEndpoint;
use SmartSender\Interaction\Endpoints\Messenger\Chats\ReadChatEndpoint;
use SmartSender\Interaction\Responses\Messenger\Chats\FindChatResponse;
use SmartSender\Interaction\Endpoints\Messenger\Chats\CloseChatEndpoint;
use SmartSender\Interaction\Endpoints\Messenger\Chats\ForwardChatEndpoint;
use SmartSender\Interaction\Responses\Messenger\Chats\ChatMessagesResponse;
use SmartSender\Interaction\Endpoints\Messenger\Chats\ChatMessagesEndpoint;

/**
 * Selected chat service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SelectedChatService extends Service
{
    /**
     * @var int
     */
    private int $chatId;

    /**
     * Setup client and chat identifier.
     *
     * @param \SmartSender\Contracts\Client $client
     * @param int                           $chatId
     */
    public function __construct(ClientContract $client, int $chatId)
    {
        $this->chatId = $chatId;

        // boot ...
        parent::__construct($client);
    }

    /**
     * Find given chat.
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Chats\FindChatResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function find(): FindChatResponse
    {
        return $this->createCallee()->call(new FindChatEndpoint($this->chatId));
    }

    /**
     * Read given chat.
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function read(): StateResponse
    {
        return $this->createCallee()->call(new ReadChatEndpoint($this->chatId));
    }

    /**
     * Close given chat.
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function close(): StateResponse
    {
        return $this->createCallee()->call(new CloseChatEndpoint($this->chatId));
    }

    /**
     * Retrieve chat messages.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Chats\ChatMessagesResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function messages(array $resource): ChatMessagesResponse
    {
        return $this->createCallee()->call(new ChatMessagesEndpoint($this->chatId, $resource));
    }

    /**
     * Forward given chat.
     *
     * @param int   $operatorId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function forward(int $operatorId, array $resource): StateResponse
    {
        return $this->createCallee()->call(new ForwardChatEndpoint($this->chatId, $operatorId, $resource));
    }
}
