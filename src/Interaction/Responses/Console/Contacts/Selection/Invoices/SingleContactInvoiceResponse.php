<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts\Selection\Invoices;

use SmartSender\Common\Models\Console\Invoice;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Single contact invoice response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\FindContactInvoiceEndpoint
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\CreateContactInvoiceEndpoint
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\RecordContactInvoiceEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SingleContactInvoiceResponse extends BaseResponse
{
    /**
     * Retrieve invoice.
     *
     * @return \SmartSender\Common\Models\Console\Invoice
     */
    public function getInvoice(): Invoice
    {
        return Invoice::create($this->response->all());
    }
}
