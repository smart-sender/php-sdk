<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console;

use SmartSender\Foundation\Service;
use SmartSender\Interaction\Endpoints\Console\AccountEndpoint;
use SmartSender\Interaction\Responses\Console\AccountResponse;

/**
 * Retrieve information about current account (project that issued access token).
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575286/Getting+an+API+Key+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class AccountService extends Service
{
    /**
     * Retrieve me.
     *
     * @return \SmartSender\Interaction\Responses\Console\AccountResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function me(): AccountResponse
    {
        return $this->createCallee()->call(new AccountEndpoint());
    }
}
