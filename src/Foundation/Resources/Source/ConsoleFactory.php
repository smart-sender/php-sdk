<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source;

use SmartSender\Foundation\Factory;
use SmartSender\Foundation\Resources\Source\Console\TagService;
use SmartSender\Foundation\Resources\Source\Console\CashierService;
use SmartSender\Foundation\Resources\Source\Console\ProductService;
use SmartSender\Foundation\Resources\Source\Console\ContactService;
use SmartSender\Foundation\Resources\Source\Console\AccountService;
use SmartSender\Foundation\Resources\Source\Console\VariableService;

/**
 * Console factory.
 *
 * @property-read \SmartSender\Foundation\Resources\Source\Console\TagService      $tags
 * @property-read \SmartSender\Foundation\Resources\Source\Console\AccountService  $account
 * @property-read \SmartSender\Foundation\Resources\Source\Console\CashierService  $cashiers
 * @property-read \SmartSender\Foundation\Resources\Source\Console\ProductService  $products
 * @property-read \SmartSender\Foundation\Resources\Source\Console\ContactService  $contacts
 * @property-read \SmartSender\Foundation\Resources\Source\Console\VariableService $variables
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class ConsoleFactory extends Factory
{
    /**
     * @inheritDoc
     */
    protected function getServiceMap(): array
    {
        return [
            'tags' => TagService::class,
            'account' => AccountService::class,
            'cashiers' => CashierService::class,
            'products' => ProductService::class,
            'contacts' => ContactService::class,
            'variables' => VariableService::class,
        ];
    }
}
