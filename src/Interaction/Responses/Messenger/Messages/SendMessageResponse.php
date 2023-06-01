<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger\Messages;

use SmartSender\Common\Models\Messenger\Message;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Send message response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Messages\SendMessageEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class SendMessageResponse extends BaseResponse
{
    /**
     * Retrieve message.
     *
     * @return \SmartSender\Common\Models\Messenger\Message
     */
    public function getMessage(): Message
    {
        return Message::create($this->response->all());
    }
}
