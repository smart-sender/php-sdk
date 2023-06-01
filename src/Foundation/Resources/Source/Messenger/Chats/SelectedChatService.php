<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
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
 * Using this API, you can get a list of created chats, get information about a chat, mark it as “read” or “close”.
 * You can also receive messages from a conversation or send a message.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676542648/Chats+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
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
     * Allows you to get information about the specified chat.
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
     * Allows you to read all notifications in the selected chat.
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
     * Allows you to close the selected chat.
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
     * Allows you to receive messages in the selected chat.
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
     * Allows you to assign the selected chat to a specific operator.
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
