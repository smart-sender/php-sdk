<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console;

use SmartSender\Common\Models\Model;
use SmartSender\Common\Models\Messenger\Funnel;

/**
 * This object describes the user (with plain variables).
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444780/Contact+-+en
 *
 * @property-read int    $id
 * @property-read string $photo
 * @property-read string $state
 *
 * @property-read string|null $email
 * @property-read string|null $phone
 *
 * @property-read string      $fullName
 * @property-read string      $firstName
 * @property-read string|null $lastName
 *
 * @property-read \SmartSender\Common\Collection $tags
 * @property-read \SmartSender\Common\Collection $funnels
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class PlainContact extends Model
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'tags' => Tag::class,
        'funnels' => Funnel::class,
    ];
}
