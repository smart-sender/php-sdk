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
 * This model defines a message in a chat.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676576008/Message+-+en
 *
 * @property-read int  $id
 * @property-read bool $internal
 *
 * @property-read string $createdAt
 * @property-read string $deliveredAt
 *
 * @property-read string|null $seenAt
 * @property-read string|null $editedAt
 *
 * @property-read \SmartSender\Common\Models\Messenger\Gate     $gate
 * @property-read \SmartSender\Common\Models\Messenger\State    $state
 * @property-read \SmartSender\Common\Models\Messenger\Sender   $sender
 * @property-read \SmartSender\Common\Models\Messenger\Template $content
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Message extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'gate' => Gate::class,
        'state' => State::class,
        'sender' => Sender::class,
        'content' => Template::class,
    ];
}
