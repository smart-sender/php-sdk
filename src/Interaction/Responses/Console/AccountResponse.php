<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console;

use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Account response.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class AccountResponse extends BaseResponse
{
    /**
     * Retrieve identifier.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->getValueFromResponse('id');
    }

    /**
     * Retrieve name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getValueFromResponse('name');
    }

    /**
     * Retrieve photo.
     *
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->getValueFromResponse('photo');
    }

    /**
     * Retrieve timezone.
     *
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->getValueFromResponse('timezone');
    }

    /**
     * Retrieve identifier.
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->getValueFromResponse('identifier');
    }
}
