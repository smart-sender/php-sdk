<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts;

use SmartSender\Common\Models\Messenger\Chat;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Contact chat response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\ContactChatEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ContactChatResponse extends BaseResponse
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
