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
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Endpoints\Messenger\ChatEndpoint;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Forward chat endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class ForwardChatEndpoint extends ChatEndpoint
{
    /**
     * @var array
     */
    private array $context;

    /**
     * @var int
     */
    private int $operatorId;

    /**
     * Setup chat and operator identifiers with in context.
     *
     * @param int   $chatId
     * @param int   $operatorId
     * @param array $context
     */
    public function __construct(int $chatId, int $operatorId, array $context)
    {
        $this->context = $context;
        $this->operatorId = $operatorId;

        // boot ...
        parent::__construct($chatId);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('%s/forward/%s', parent::getType(), $this->getOperatorId());
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
            RequestOptions::JSON => $this->context,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): StateResponse
    {
        return new StateResponse($response);
    }

    /**
     * Retrieve operator identifier.
     *
     * @return int
     */
    public function getOperatorId(): int
    {
        return $this->operatorId;
    }
}
