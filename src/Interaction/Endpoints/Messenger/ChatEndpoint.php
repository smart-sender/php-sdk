<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger;

use SmartSender\Contracts\Endpoint as EndpointContract;

/**
 * Chat endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
abstract class ChatEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $chatId;

    /**
     * Setup chat identifier.
     *
     * @param int $chatId
     */
    public function __construct(int $chatId)
    {
        $this->chatId = $chatId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('chats/%s', $this->chatId);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }
}
