<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Messages;

use GuzzleHttp\RequestOptions;
use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Messenger\Messages\CollectMessagesResponse;

/**
 * Collect chat messages endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectChatMessagesEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $chatId;

    /**
     * Setup chat identifier and context.
     *
     * @param int   $chatId
     * @param array $context
     */
    public function __construct(int $chatId, array $context)
    {
        $this->chatId = $chatId;

        // boot ...
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('chats/%s/messages', $this->chatId);
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
    public function getOptions(): array
    {
        return [
            RequestOptions::QUERY => $this->context,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): CollectMessagesResponse
    {
        return new CollectMessagesResponse($response);
    }
}
