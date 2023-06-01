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
 * This model describes a communication channel in Smart Messenger
 * (this can be any connected messenger integration, for example, Telegram or Viber).
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676543154/Channel+-+en
 *
 * @property-read int $id
 * @property-read bool $active
 * @property-read bool $occupied
 *
 * @property-read string $type
 * @property-read string $name
 *
 * @property-read string $app
 * @property-read string $link
 * @property-read int $referrer
 *
 * @property-read string $createdAt
 * @property-read string $updatedAt
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Channel extends Model
{
    //
}
