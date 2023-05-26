<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation;

/**
 * Setup collection.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
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
     * Retrieve collection values.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->context;
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
