<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Messenger\Operators;

use SmartSender\Common\Models\Model;

/**
 * This object describes the agent's current status with respect to the Smart Messenger service.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676543204/OperatorStatus+-+en
 *
 * @property-read int   $id
 * @property-read string $name
 * @property-read string $color
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class OperatorStatus extends Model
{
    //
}
