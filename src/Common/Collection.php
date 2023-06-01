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
use LogicException;

/**
 * Data collection.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Collection
{
    /**
     * @var array
     */
    private array $context;

    /**
     * Setup context.
     *
     * @param array $context
     */
    public function __construct(array $context)
    {
        $this->context = $context;
    }

    /**
     * Verifies for collection elements.
     *
     * @return bool
     */
    public function any(): bool
    {
        return !empty($this->context);
    }

    /**
     * Retrieve collection values.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->context;
    }

    /**
     * Retrieve first instance.
     *
     * @return mixed
     */
    public function first()
    {
        return current($this->context);
    }

    /**
     * Retrieve first instance or fail.
     *
     * @return mixed
     */
    public function firstOrFail()
    {
        return $this->first() ?: Accessor::value(static function () {
            // notifies for missing value
            throw new LogicException('Value is missing');
        });
    }

    /**
     * Filter given collection.
     *
     * @param \Closure $closure
     *
     * @return static
     */
    public function filter(Closure $closure): Collection
    {
        return new static(array_filter($this->context, $closure));
    }

    /**
     * Retrieve value from collection.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get(string $key, $default)
    {
        return $this->context[$key] ?? Accessor::value($default);
    }
}
