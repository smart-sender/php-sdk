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
 * Chat describes all customer communication with your Smart Messenger communication channels.
 * Each contact has one chat, but in turn can have multiple communication channels.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444665/Chat+-+en
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
