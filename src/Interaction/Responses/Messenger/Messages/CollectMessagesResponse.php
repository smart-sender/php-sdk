<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger\Messages;

use SmartSender\Common\Models\Messenger\Message;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect messages response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Messages\CollectMessagesEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectMessagesResponse extends CollectResponse
{
    /**
     * @inheritdoc
     */
    protected function createModel(array $context): Message
    {
        return Message::create($context);
    }
}
