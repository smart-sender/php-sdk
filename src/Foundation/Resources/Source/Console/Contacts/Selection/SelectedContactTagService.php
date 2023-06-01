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
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Tags\AddContactTagEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactTagsResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Tags\RemoveContactTagEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Tags\CollectContactTagsEndpoint;

/**
 * Using this API, you can view, add, and remove tags from a selected contact.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575485/Contact+Tags+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class SelectedContactTagService extends SelectedContactService
{
    /**
     * Allows you to view the tags of the selected contact.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactTagsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectContactTagsResponse
    {
        return $this->createCallee()->call(new CollectContactTagsEndpoint($this->contactId, $resource));
    }

    /**
     * Allows you to add a tag to the selected contact.
     *
     * @param int $tagId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function add(int $tagId): StateResponse
    {
        return $this->createCallee()->call(new AddContactTagEndpoint($this->contactId, $tagId));
    }

    /**
     * Allows you to remove a tag for the selected contact.
     *
     * @param int $tagId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function remove(int $tagId): StateResponse
    {
        return $this->createCallee()->call(new RemoveContactTagEndpoint($this->contactId, $tagId));
    }
}
