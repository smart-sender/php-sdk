<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Cashiers;

use SmartSender\Common\Models\Console\Invoices\InvoiceLog;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Cashier logs response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Cashiers\CashierLogsEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CashierLogsResponse extends CollectResponse
{
    /**
     * @inheritdoc
     */
    protected function createModel(array $context): InvoiceLog
    {
        return InvoiceLog::create($context);
    }
}
