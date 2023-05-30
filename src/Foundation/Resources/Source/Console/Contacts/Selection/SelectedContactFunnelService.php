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
use SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactFunnelsResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Funnels\AddContactFunnelEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Funnels\RemoveContactFunnelEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Funnels\CollectContactFunnelsEndpoint;

/**
 * Selected contact funnel service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SelectedContactFunnelService extends Service
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
     * Retrieve contact funnels.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactFunnelsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectContactFunnelsResponse
    {
        return $this->createCallee()->call(new CollectContactFunnelsEndpoint($this->contactId, $resource));
    }

    /**
     * Add given funnel to contact.
     *
     * @param int $funnelId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function add(int $funnelId): StateResponse
    {
        return $this->createCallee()->call(new AddContactFunnelEndpoint($this->contactId, $funnelId));
    }

    /**
     * Remove given funnel from contact.
     *
     * @param int $funnelId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function remove(int $funnelId): StateResponse
    {
        return $this->createCallee()->call(new RemoveContactFunnelEndpoint($this->contactId, $funnelId));
    }
}
