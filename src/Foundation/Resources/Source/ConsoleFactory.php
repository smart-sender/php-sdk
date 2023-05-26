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

/**
 * Console factory.
 *
 * @property-read \SmartSender\Foundation\Resources\Source\Console\TagService $tags
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
        ];
    }
}
