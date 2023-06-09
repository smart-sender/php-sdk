<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console;

use SmartSender\Foundation\Service;
use SmartSender\Interaction\Endpoints\Console\Contacts\SearchContactsEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\CollectContactsEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\CollectContactsResponse;
use SmartSender\Foundation\Resources\Source\Console\Contacts\MainSelectedContactService;

/**
 * Using this API, you can view, find, add, edit, merge, and delete contacts in a project.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444281/Contacts+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ContactService extends Service
{
    /**
     * Creates selected contact service.
     *
     * @param int $contactId
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Contacts\MainSelectedContactService
     */
    public function select(int $contactId): MainSelectedContactService
    {
        return new MainSelectedContactService($this->client, $contactId);
    }

    /**
     * Allows you to find matches for contacts using a keyword.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\CollectContactsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function search(array $resource): CollectContactsResponse
    {
        return $this->createCallee()->call(new SearchContactsEndpoint($resource));
    }

    /**
     * Allows you to get a list of contacts in the project.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\CollectContactsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectContactsResponse
    {
        return $this->createCallee()->call(new CollectContactsEndpoint($resource));
    }
}
