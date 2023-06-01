<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console\Invoices;

use SmartSender\Common\Models\Model;

/**
 * This model describes the status of an attempt to pay a bill by a contact.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676674038/InvoiceLogStatus+-+en
 *
 * @property-read int    $code
 * @property-read string $name
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class InvoiceLogStatus extends Model
{
    //
}
