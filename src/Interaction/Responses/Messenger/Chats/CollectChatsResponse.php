<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger\Chats;

use SmartSender\Common\Models\Messenger\Chat;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect chats response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Chats\CollectChatsEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CollectChatsResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Chat
    {
        return Chat::create($context);
    }
}
