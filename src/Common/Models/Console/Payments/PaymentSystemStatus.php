<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console\Payments;

use SmartSender\Common\Models\Model;

/**
 * This object defines the connection status of the payment system.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676543246/PaymentSystemStatus+-+en
 *
 * @property-read string $name
 * @property-read string $color
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class PaymentSystemStatus extends Model
{
    //
}
