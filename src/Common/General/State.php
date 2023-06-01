<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\General;

/**
 * Define state.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class State
{
    /**
     * @var bool
     */
    private bool $value;

    /**
     * Setup value.
     *
     * @param bool $value
     */
    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    /**
     * Retrieve state.
     *
     * @return bool
     */
    public function getValue(): bool
    {
        return $this->value;
    }

    /**
     * Verifies for success.
     *
     * @return bool
     */
    public function isSucceed(): bool
    {
        return true === $this->value;
    }

    /**
     * Verifies for failure.
     *
     * @return bool
     */
    public function isFailure(): bool
    {
        return false === $this->value;
    }
}
