<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console;

use SmartSender\Common\Models\Model;
use SmartSender\Common\Models\Console\Invoices\InvoiceLog;

/**
 * Console invoice.
 *
 * @property-read int $id
 * @property-read string $orderId
 * @property-read string $createdAt
 * @property-read string $checkoutUrl
 *
 * @property-read \SmartSender\Common\Collection $logs
 *
 * @property-read \SmartSender\Common\Models\Console\ProductEssence $essence
 * @property-read \SmartSender\Common\Models\Console\PaymentSystem  $paymentSystem
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Invoice extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'logs' => InvoiceLog::class,
        'essence' => ProductEssence::class,
        'paymentSystem' => PaymentSystem::class,
    ];
}
