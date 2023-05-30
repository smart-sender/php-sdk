<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Exceptions;

use Exception;

/**
 * Bad response exception.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575867/API+errors
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class BadResponseException extends Exception
{
    /**
     * @var array
     */
    private array $description = [];

    /**
     * Verifies for description.
     *
     * @return bool
     */
    public function hasDescription(): bool
    {
        return !empty($this->description);
    }

    /**
     * Retrieve description.
     *
     * @return array|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * Setup description.
     *
     * @param array $description
     *
     * @return static
     */
    public function setDescription(array $description): self
    {
        $this->description = $description;

        return $this;
    }
}
