<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts\Selection;

use SmartSender\Contracts\Endpoint as EndpointContract;

/**
 * Selected contact funnel endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
abstract class SelectedContactFunnelEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $serviceId;

    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup contact and funnel identifiers.
     *
     * @param int $contactId
     * @param int $serviceId
     */
    public function __construct(int $contactId, int $serviceId)
    {
        $this->contactId = $contactId;
        $this->serviceId = $serviceId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/funnels/%s', $this->contactId, $this->serviceId);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }
}
