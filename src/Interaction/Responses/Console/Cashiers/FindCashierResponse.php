<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Cashiers;

use SmartSender\Common\Models\Console\Cashier;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Find cashier response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Cashiers\FindCashierEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class FindCashierResponse extends BaseResponse
{
    /**
     * Retrieve cashier.
     *
     * @return \SmartSender\Common\Models\Console\Cashier
     */
    public function getCashier(): Cashier
    {
        return Cashier::create($this->response->all());
    }
}
