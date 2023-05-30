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

use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Foundation\Resources\Source\Console\Contacts\SelectedContactService;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\CollectContactFunnelsResponse;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Funnels\AddContactFunnelEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Funnels\RemoveContactFunnelEndpoint;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Funnels\CollectContactFunnelsEndpoint;

/**
 * Selected contact funnel service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SelectedContactFunnelService extends SelectedContactService
{
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
     * @param int $serviceId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function add(int $serviceId): StateResponse
    {
        return $this->createCallee()->call(new AddContactFunnelEndpoint($this->contactId, $serviceId));
    }

    /**
     * Remove given funnel from contact.
     *
     * @param int $serviceId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function remove(int $serviceId): StateResponse
    {
        return $this->createCallee()->call(new RemoveContactFunnelEndpoint($this->contactId, $serviceId));
    }
}
