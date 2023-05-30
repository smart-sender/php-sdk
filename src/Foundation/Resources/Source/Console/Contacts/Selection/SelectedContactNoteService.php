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

use SmartSender\Foundation\Service;
use SmartSender\Contracts\Client as ClientContract;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CreateContactNoteResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\CreateContactNoteEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\DeleteContactNoteEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\UpdateContactNoteEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\CollectContactNotesEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CollectContactNotesResponse;

/**
 * Selected contact note service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SelectedContactNoteService extends Service
{
    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup client and contact identifier.
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
     * Retrieve contact notes.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CollectContactNotesResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectContactNotesResponse
    {
        return $this->createCallee()->call(new CollectContactNotesEndpoint($this->contactId, $resource));
    }

    /**
     * Creates note for contact.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CreateContactNoteResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function create(array $resource): CreateContactNoteResponse
    {
        return $this->createCallee()->call(new CreateContactNoteEndpoint($this->contactId, $resource));
    }

    /**
     * Add given tag to contact.
     *
     * @param int   $noteId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function update(int $noteId, array $resource): StateResponse
    {
        return $this->createCallee()->call(new UpdateContactNoteEndpoint($this->contactId, $noteId, $resource));
    }

    /**
     * Remove given tag from contact.
     *
     * @param int $noteId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function delete(int $noteId): StateResponse
    {
        return $this->createCallee()->call(new DeleteContactNoteEndpoint($this->contactId, $noteId));
    }
}
