<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common;

use Closure;

/**
 * Data accessor.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Accessor
{
    /**
     * Retrieve value.
     *
     * @param mixed $value
     * @param mixed  ...$args
     *
     * @return mixed
     */
    public static function value($value, ...$args)
    {
        return $value instanceof Closure ? $value(...$args) : $value;
    }
}
