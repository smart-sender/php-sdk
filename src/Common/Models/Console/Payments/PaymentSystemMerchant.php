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
 * This object provides publicly available information about a merchant connected to a particular payment system.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676543255/PaymentSystemMerchant+-+en
 *
 * @property-read int    $id
 * @property-read string $merchantId
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class PaymentSystemMerchant extends Model
{
    //
}
