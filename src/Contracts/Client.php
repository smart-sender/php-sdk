<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Contracts;

/**
 * Client contract.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575286/Getting+an+API+Key+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
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
