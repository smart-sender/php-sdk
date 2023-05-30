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
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SelectedContactInvoiceService extends SelectedContactService
{
    /**
     * Retrieve contact invoices.
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
     * Creates contact invoice.
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
     * Retrieve given invoice.
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
     * Record given invoice.
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
