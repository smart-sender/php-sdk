<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Chats;

use GuzzleHttp\RequestOptions;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Endpoints\Messenger\ChatEndpoint;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Messenger\Chats\ChatMessagesResponse;

/**
 * Chat messages endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class ChatMessagesEndpoint extends ChatEndpoint
{
    /**
     * @var array
     */
    private array $context;

    /**
     * Setup chat and operator identifiers with in context.
     *
     * @param int   $chatId
     * @param array $context
     */
    public function __construct(int $chatId, array $context)
    {
        $this->context = $context;

        // boot ...
        parent::__construct($chatId);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('%s/messages', parent::getType());
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_POST;
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
    public function getAdapted(PendingResponse $response): ChatMessagesResponse
    {
        return new ChatMessagesResponse($response);
    }
}
