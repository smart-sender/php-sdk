<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Messenger;

use SmartSender\Common\Models\Model;

/**
 * This object defines the result of the operation.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444686/State+-+en
 *
 * @property-read string      $type
 * @property-read string|null $message
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class State extends Model
{
    //
}
