<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console\Cashiers;

use SmartSender\Foundation\Service;
use SmartSender\Contracts\Client as ClientContract;
use SmartSender\Interaction\Endpoints\Console\Cashiers\CashierLogsEndpoint;
use SmartSender\Interaction\Endpoints\Console\Cashiers\FindCashierEndpoint;
use SmartSender\Interaction\Responses\Console\Cashiers\CashierLogsResponse;
use SmartSender\Interaction\Responses\Console\Cashiers\FindCashierResponse;

/**
 * This API makes it possible to view, find connected payment systems and view payments for the selected one.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444559/Payments+API-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class SelectedCashierService extends Service
{
    /**
     * @var int
     */
    protected int $cashierId;

    /**
     * Setup client and contact identifier.
     *
     * @param \SmartSender\Contracts\Client $client
     * @param int                           $cashierId
     */
    public function __construct(ClientContract $client, int $cashierId)
    {
        $this->cashierId = $cashierId;

        // boot ...
        parent::__construct($client);
    }

    /**
     * Allows you to get information about the specified payment system.
     *
     * @return \SmartSender\Interaction\Responses\Console\Cashiers\FindCashierResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function find(): FindCashierResponse
    {
        return $this->createCallee()->call(new FindCashierEndpoint($this->cashierId));
    }

    /**
     * Allows you to get information about payments in the specified payment system.
     *
     * @return \SmartSender\Interaction\Responses\Console\Cashiers\CashierLogsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function logs(): CashierLogsResponse
    {
        return $this->createCallee()->call(new CashierLogsEndpoint($this->cashierId));
    }
}
