<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Cashiers;

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Endpoints\Console\CashierEndpoint;
use SmartSender\Interaction\Responses\Console\Cashiers\FindCashierResponse;

/**
 * Find cashier endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class FindCashierEndpoint extends CashierEndpoint
{
    /**
     * @inheritdoc
     */
    public function getAdapted(PendingResponse $response): FindCashierResponse
    {
        return new FindCashierResponse($response);
    }
}
