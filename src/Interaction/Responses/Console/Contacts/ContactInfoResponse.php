<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts;

use SmartSender\Common\Models\Console\PlainContact;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Contact info response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\ContactInfoEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class ContactInfoResponse extends BaseResponse
{
    /**
     * Retrieve contact.
     *
     * @return \SmartSender\Common\Models\Console\PlainContact
     */
    public function getContact(): PlainContact
    {
        return PlainContact::create($this->response->all());
    }
}
