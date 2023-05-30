<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models;

use JsonSerializable;
use SmartSender\Common\Collection;

/**
 * Defines model.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Model implements JsonSerializable
{
    /**
     * Casters list.
     */
    protected const CASTERS = [];

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
     * Creates from static context.
     *
     * @param array $context
     *
     * @return static
     */
    public static function create(array $context): self
    {
        return new static($context);
    }

    /**
     * Retrieve attribute value.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name)
    {
        $value = $this->context[$name] ?? null;

        if (!$value) {
            // retrieve missing value
            return null;
        }

        // if caster specified
        if ($caster = $this->getCaster($name)) {
            // if nested attributes
            if (isset($caster[0]) && is_array($caster[0])) {
                // iterate through all nested items
                return new Collection(array_map([$caster, 'create'], $value));
            }

            /** @var static $caster */

            return $caster::create($value);
        }

        return $value;
    }

    /**
     * Verifies for service existence.
     *
     * @param string $name
     *
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return array_key_exists($name, $this->context);
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return $this->context;
    }

    /**
     * Retrieve casters.
     *
     * @param string $name
     *
     * @return array|null
     */
    protected function getCaster(string $name): ?array
    {
        return static::CASTERS[$name] ?? null;
    }
}
