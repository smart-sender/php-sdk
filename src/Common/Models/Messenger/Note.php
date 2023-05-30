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
 * This object describes a note about a user, contact, item, or other.
 * This functionality is for informational purposes only.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676673818/Note+-+en
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
