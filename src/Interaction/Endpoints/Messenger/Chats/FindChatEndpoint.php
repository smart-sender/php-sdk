<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Chats;

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Endpoints\Messenger\ChatEndpoint;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Messenger\Chats\FindChatResponse;

/**
 * Find chat endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class FindChatEndpoint extends ChatEndpoint
{
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
    public function getAdapted(PendingResponse $response): FindChatResponse
    {
        return new FindChatResponse($response);
    }
}
