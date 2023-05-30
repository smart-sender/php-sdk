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
use SmartSender\Common\Models\Messenger\Operators\OperatorStatus;

/**
 * Messenger operator.
 *
 * @property-read int    $id
 * @property-read string $type
 * @property-read string $watermark
 *
 * @property-read bool $subscribed
 * @property-read bool $involvement
 * @property-read int  $chatsTotal
 *
 * @property-read string      $createdAt
 * @property-read string|null $deletedAt
 *
 * @property-read \SmartSender\Common\Models\User $info
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Operator extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'info' => User::class,
        'status' => OperatorStatus::class,
    ];
}
