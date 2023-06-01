<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources;

use SmartSender\Foundation\Factory;
use SmartSender\Foundation\Resources\Source\ConsoleFactory;
use SmartSender\Foundation\Resources\Source\MessengerFactory;

/**
 * Core factory.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CoreFactory extends Factory
{
    /**
     * @inheritDoc
     */
    protected function getServiceMap(): array
    {
        return [
            'console' => ConsoleFactory::class,
            'messenger' => MessengerFactory::class,
        ];
    }
}
