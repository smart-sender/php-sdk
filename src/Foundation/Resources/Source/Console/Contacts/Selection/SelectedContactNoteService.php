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

use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Foundation\Resources\Source\Console\Contacts\SelectedContactService;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CreateContactNoteResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\CreateContactNoteEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\DeleteContactNoteEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\UpdateContactNoteEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\CollectContactNotesEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CollectContactNotesResponse;

/**
 * With this API, you can view, edit, create, and delete notes for the selected contact.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444371/Contact+Notes+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class SelectedContactNoteService extends SelectedContactService
{
    /**
     * Get a list of created notes for a contact.
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
     * Create a note for a contact.
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
     *Allows you to update the selected notes of the contact.
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
     * Allows you to delete the selected note from the contact.
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
