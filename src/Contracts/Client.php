<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Contracts;

/**
 * Client contract.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
interface Client
{
    /**
     * Retrieve access token.
     *
     * @return string
     */
    public function getAccessToken(): string;
}
