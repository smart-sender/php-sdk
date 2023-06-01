<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender;

use SmartSender\Common\Accessor;

/**
 * Package config.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Config
{
    /**
     * @var array
     */
    private array $values;

    /**
     * Hold the class instance.
     *
     * @var static|null
     */
    private static ?self $instance = null;

    /**
     * @return void
     */
    private function __construct()
    {
        $this->values = include __DIR__.'/../config/sws.php';
    }

    /**
     * The object is created from within the class itself
     * only if the class has no instance.
     *
     * @return static
     */
    public static function getInstance(): self
    {
        if (null === self::$instance) {
            // creates new instance
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Retrieve config value.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getValue(string $key, $default = null)
    {
        return $this->values[$key] ?? Accessor::value($default);
    }

    /**
     * Retrieve config values.
     *
     * @param array $keys
     *
     * @return mixed
     */
    public function getValues(string ...$keys): array
    {
        return array_map(fn (string $key) => $this->getValue($key), $keys);
    }
}
