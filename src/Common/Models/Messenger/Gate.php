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
 * This model defines a contact who came through Messenger and defines it as an “accessible method of communication”.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444674/Gate+-+en
 *
 * @property-read int  $id
 * @property-read bool $subscribed
 * @property-read int  $unreadMessages
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Gate extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'channel' => Channel::class,
    ];
}
