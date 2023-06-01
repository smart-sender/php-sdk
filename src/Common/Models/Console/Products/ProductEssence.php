<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console\Products;

use SmartSender\Common\Models\Model;

/**
 * This object describes a product unit.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676674014/ProductEssence+-+en
 *
 * @property-read int $id
 *
 * @property-read string $name
 * @property-read float  $price
 * @property-read string $amount
 * @property-read string $currency
 *
 * @property-read string $createdAt
 * @property-read string $modifiedAt
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ProductEssence extends Model
{
    //
}
