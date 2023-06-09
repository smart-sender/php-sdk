<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console\Contacts\Selection;

use SmartSender\Foundation\Resources\Source\Console\Contacts\SelectedContactService;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\FindContactInvoiceEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\CreateContactInvoiceEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Invoices\SingleContactInvoiceResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\RecordContactInvoiceEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\CollectContactInvoicesEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Invoices\CollectContactInvoicesResponse;

/**
 * With this API, you can view, create, find and create accounts for the selected customer.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676411989/Contact+Invoices+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class SelectedContactInvoiceService extends SelectedContactService
{
    /**
     * Allows you to view the created accounts of the selected contact in the project.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\Invoices\CollectContactInvoicesResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectContactInvoicesResponse
    {
        return $this->createCallee()->call(new CollectContactInvoicesEndpoint($this->contactId, $resource));
    }

    /**
     * Create a new account for a contact.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\Invoices\SingleContactInvoiceResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function create(array $resource): SingleContactInvoiceResponse
    {
        return $this->createCallee()->call(new CreateContactInvoiceEndpoint($this->contactId, $resource));
    }

    /**
     * Getting the contact's invoice by number (orderId).
     *
     * @param string $orderId
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\Invoices\SingleContactInvoiceResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function find(string $orderId): SingleContactInvoiceResponse
    {
        return $this->createCallee()->call(new FindContactInvoiceEndpoint($this->contactId, $orderId));
    }

    /**
     * Manual payment.
     *
     * Pays the specified invoice (or creates one if it didn't already exist) for the specified contact.
     * If the payment amount is less than the actual amount on the issued invoice,
     * the invoice will still be successfully paid.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\Invoices\SingleContactInvoiceResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function record(array $resource): SingleContactInvoiceResponse
    {
        return $this->createCallee()->call(new RecordContactInvoiceEndpoint($this->contactId, $resource));
    }
}
