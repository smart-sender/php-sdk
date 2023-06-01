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
use SmartSender\Interaction\Endpoints\Console\Cashiers\CollectCashiersEndpoint;
use SmartSender\Interaction\Responses\Console\Cashiers\CollectCashiersResponse;
use SmartSender\Foundation\Resources\Source\Console\Cashiers\SelectedCashierService;

/**
 * This API makes it possible to view, find connected payment systems and view payments for the selected one.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444559/Payments+API-+en
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CashierService extends Service
{
    /**
     * Creates selected cashier service.
     *
     * @param int $cashierId
     *
     * @return \SmartSender\Foundation\Resources\Source\Console\Cashiers\SelectedCashierService
     */
    public function select(int $cashierId): SelectedCashierService
    {
        return new SelectedCashierService($this->client, $cashierId);
    }

    /**
     * Allows you to view the connected payment systems in the project.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Cashiers\CollectCashiersResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectCashiersResponse
    {
        return $this->createCallee()->call(new CollectCashiersEndpoint($resource));
    }
}
