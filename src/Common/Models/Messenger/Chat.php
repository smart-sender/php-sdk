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
 * Messenger chat.
 *
 * @property-read int    $id
 * @property-read string $name
 * @property-read string $image
 *
 * @property-read string $createdAt
 * @property-read string $updatedAt
 *
 * @property-read \SmartSender\Common\Models\Messenger\Gate           $gate
 * @property-read \SmartSender\Common\Models\Messenger\ServiceContact $contact
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Chat extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'gate' => Gate::class,
        'serviceContact' => ServiceContact::class,
    ];
}
