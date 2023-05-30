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

use SmartSender\Common\Models\User;
use SmartSender\Common\Models\Model;

/**
 * Console note.
 *
 * @property-read int    $id
 * @property-read string $content
 * @property-read string $createdAt
 *
 * @property-read \SmartSender\Common\Models\User $user
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Note extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'user' => User::class,
    ];
}
