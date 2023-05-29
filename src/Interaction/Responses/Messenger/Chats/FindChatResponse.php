<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger\Chats;

use SmartSender\Common\Models\Messenger\Chat;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Find chat response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Chats\FindChatEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class FindChatResponse extends BaseResponse
{
    /**
     * Retrieve chat.
     *
     * @return \SmartSender\Common\Models\Messenger\Chat
     */
    public function getChat(): Chat
    {
        return Chat::create($this->response->all());
    }
}
