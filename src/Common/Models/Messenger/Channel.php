<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Messenger;

use SmartSender\Common\Models\Model;

/**
 * Messenger channel.
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
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Channel extends Model
{
    //
}
