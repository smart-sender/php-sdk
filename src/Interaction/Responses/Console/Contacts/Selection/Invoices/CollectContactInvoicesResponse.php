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
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect contact invoices response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices\CollectContactInvoicesEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectContactInvoicesResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Invoice
    {
        return Invoice::create($context);
    }
}
