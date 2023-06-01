<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Cashiers;

use SmartSender\Common\Models\Console\Cashier;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect cashiers response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Cashiers\CollectCashiersEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CollectCashiersResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Cashier
    {
        return Cashier::create($context);
    }
}
