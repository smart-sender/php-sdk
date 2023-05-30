<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console\Contacts;

use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Responses\Console\Contacts\ContactChatResponse;
use SmartSender\Interaction\Responses\Console\Contacts\ContactInfoResponse;
use SmartSender\Interaction\Responses\Console\Contacts\FindContactResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\ContactChatEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\ContactInfoEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\FindContactEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\FireContactEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\ContactGatesEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\ContactGatesResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\UniteContactsEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\UpdateContactEndpoint;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactTagService;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactNoteService;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactFunnelService;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactInvoiceService;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactCheckoutService;

/**
 * Using this API, you can view, find, add, edit, merge, and delete contacts in a project.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444281/Contacts+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class MainSelectedContactService extends SelectedContactService
{
    /**
     * Tags manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactTagService
     */
    public function tagsManager(): SelectedContactTagService
    {
        return new SelectedContactTagService($this->client, $this->contactId);
    }

    /**
     * Notes manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactNoteService
     */
    public function notesManager(): SelectedContactNoteService
    {
        return new SelectedContactNoteService($this->client, $this->contactId);
    }

    /**
     * Funnels manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactFunnelService
     */
    public function funnelsManager(): SelectedContactFunnelService
    {
        return new SelectedContactFunnelService($this->client, $this->contactId);
    }

    /**
     * Invoices manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactInvoiceService
     */
    public function invoicesManager(): SelectedContactInvoiceService
    {
        return new SelectedContactInvoiceService($this->client, $this->contactId);
    }

    /**
     * Checkout manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactCheckoutService
     */
    public function checkoutManager(): SelectedContactCheckoutService
    {
        return new SelectedContactCheckoutService($this->client, $this->contactId);
    }

    /**
     * Find contact chat.
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\ContactChatResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function chat(): ContactChatResponse
    {
        return $this->createCallee()->call(new ContactChatEndpoint($this->contactId));
    }

    /**
     * Retrieve contact gates.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\ContactGatesResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function gates(array $resource): ContactGatesResponse
    {
        return $this->createCallee()->call(new ContactGatesEndpoint($this->contactId, $resource));
    }

    /**
     * Retrieve contact info.
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\ContactInfoResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function info(): ContactInfoResponse
    {
        return $this->createCallee()->call(new ContactInfoEndpoint($this->contactId));
    }

    /**
     * Retrieve given contact.
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\FindContactResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function find(): FindContactResponse
    {
        return $this->createCallee()->call(new FindContactEndpoint($this->contactId));
    }

    /**
     * Fire event for contact.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function fire(array $resource): StateResponse
    {
        return $this->createCallee()->call(new FireContactEndpoint($this->contactId, $resource));
    }

    /**
     * Unite given contacts.
     *
     * @param int $targetContactId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function unite(int $targetContactId): StateResponse
    {
        return $this->createCallee()->call(new UniteContactsEndpoint($this->contactId, $targetContactId));
    }

    /**
     * Update given contact.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function update(array $resource): StateResponse
    {
        return $this->createCallee()->call(new UpdateContactEndpoint($this->contactId, $resource));
    }
}
