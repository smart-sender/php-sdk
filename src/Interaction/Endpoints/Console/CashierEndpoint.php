<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console;

use SmartSender\Contracts\Endpoint as EndpointContract;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Cashier endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
abstract class CashierEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $cashierId;

    /**
     * Setup cashier identifier.
     *
     * @param int $cashierId
     */
    public function __construct(int $cashierId)
    {
        $this->cashierId = $cashierId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('cashiers/%s', $this->cashierId);
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_GET;
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }
}
