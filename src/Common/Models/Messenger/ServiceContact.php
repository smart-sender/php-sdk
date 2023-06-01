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
 * Describes a contact inside a third-party service.
 * If we take Smart Console, Console as a basis, then third-party services can be Smart Messages, Smart Push and others.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676412395/ServiceContact+-+en
 *
 * @property-read int $id
 * @property-read int $originalId
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ServiceContact extends Model
{
    //
}
