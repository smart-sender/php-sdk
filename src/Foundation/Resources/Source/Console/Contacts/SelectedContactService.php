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

use SmartSender\Foundation\Service;
use SmartSender\Contracts\Client as ClientContract;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Responses\Console\Contacts\ContactInfoResponse;
use SmartSender\Interaction\Responses\Console\Contacts\FindContactResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\ContactChatEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\ContactInfoEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\FindContactEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\FireContactEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\ContactChatResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\ContactGatesEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\ContactGatesResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\UniteContactsEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\UpdateContactEndpoint;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactTagService;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactNoteService;
use SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactFunnelService;

/**
 * Selected contact service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SelectedContactService extends Service
{
    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup client and chat identifier.
     *
     * @param \SmartSender\Contracts\Client $client
     * @param int                           $contactId
     */
    public function __construct(ClientContract $client, int $contactId)
    {
        $this->contactId = $contactId;

        // boot ...
        parent::__construct($client);
    }

    /**
     * Tags manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactTagService
     */
    public function tags(): SelectedContactTagService
    {
        return new SelectedContactTagService($this->client, $this->contactId);
    }

    /**
     * Notes manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactNoteService
     */
    public function notes(): SelectedContactNoteService
    {
        return new SelectedContactNoteService($this->client, $this->contactId);
    }

    /**
     * Funnels manager.
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\Selection\SelectedContactFunnelService
     */
    public function funnels(): SelectedContactFunnelService
    {
        return new SelectedContactFunnelService($this->client, $this->contactId);
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
