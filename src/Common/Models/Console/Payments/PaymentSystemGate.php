<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console\Payments;

use SmartSender\Common\Models\Model;

/**
 * This object defines the current active merchant for the connected payment system.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676674052/PaymentSystemGate+-+en
 *
 * @property-read int    $id
 * @property-read string $type
 *
 * @property-read \SmartSender\Common\Models\Console\Payments\PaymentSystemStatus   $status
 * @property-read \SmartSender\Common\Models\Console\Payments\PaymentSystemMerchant $merchant
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class PaymentSystemGate extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'status' => PaymentSystemStatus::class,
        'merchant' => PaymentSystemMerchant::class,
    ];
}
