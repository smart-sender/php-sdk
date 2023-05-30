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
use SmartSender\Common\Models\Console\Payments\PaymentSystemGate;

/**
 * This object defines the payment system (alias PaymentSystem) and gives more detailed information about the status and so on.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676412287/Cashier+-+en
 *
 * @see \SmartSender\Common\Models\Console\PaymentSystem
 *
 * @property-read int    $id
 * @property-read string $name
 *
 * @property-read \SmartSender\Common\Models\Console\Payments\PaymentSystemGate $gate
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Cashier extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'gate' => PaymentSystemGate::class,
    ];
}
