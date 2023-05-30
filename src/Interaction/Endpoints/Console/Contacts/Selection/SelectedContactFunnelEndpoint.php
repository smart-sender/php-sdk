<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts\Selection;

use SmartSender\Contracts\Endpoint as EndpointContract;

/**
 * Selected contact funnel endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
abstract class SelectedContactFunnelEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $funnelId;

    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup contact and funnel identifiers.
     *
     * @param int $contactId
     * @param int $funnelId
     */
    public function __construct(int $contactId, int $funnelId)
    {
        $this->funnelId = $funnelId;
        $this->contactId = $contactId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/funnels/%s', $this->contactId, $this->funnelId);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }
}
