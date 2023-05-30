<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console\Invoices;

use SmartSender\Common\Models\Model;

/**
 * This object describes a user's attempt to pay an invoice.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676412345/InvoiceLog+-+en
 *
 * @property-read int    $id
 * @property-read string $type
 * @property-read bool   $state
 * @property-read float  $amount
 * @property-read string $currency
 * @property-read string $createdAt
 *
 * @property-read \SmartSender\Common\Models\Console\Invoices\InvoiceLogStatus $status
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class InvoiceLog extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'status' => InvoiceLogStatus::class,
    ];
}
