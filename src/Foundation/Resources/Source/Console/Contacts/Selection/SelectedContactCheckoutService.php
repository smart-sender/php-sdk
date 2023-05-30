<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console\Contacts\Selection;

use SmartSender\Foundation\Resources\Source\Console\Contacts\SelectedContactService;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactCheckoutResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Checkout\CollectContactCheckoutEndpoint;

/**
 * Selected contact checkout service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SelectedContactCheckoutService extends SelectedContactService
{
    /**
     * Retrieve contact funnels.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactCheckoutResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectContactCheckoutResponse
    {
        return $this->createCallee()->call(new CollectContactCheckoutEndpoint($this->contactId, $resource));
    }
}
