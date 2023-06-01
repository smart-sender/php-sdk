<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console;

use SmartSender\Common\Models\Model;
use SmartSender\Common\Models\Console\Products\ProductEssence;

/**
 * This object defines an item for which units can be invoiced to customers.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575963/Product+-+en
 *
 * @property-read int    $id
 * @property-read string $name
 * @property-read string $createdAt
 *
 * @property-read \SmartSender\Common\Collection $labels
 * @property-read \SmartSender\Common\Collection $essences
 * @property-read \SmartSender\Common\Collection $paymentSystems
 *
 * @property-read \SmartSender\Common\Models\Console\Category|null $category
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Product extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'labels' => Label::class,
        'category' => Category::class,
        'essences' => ProductEssence::class,
        'paymentSystems' => PaymentSystem::class,
    ];
}
