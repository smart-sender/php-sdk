<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console;

use SmartSender\Common\Models\Messenger\Funnel;

/**
 * This object describes the user (with scoped variables).
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444780/Contact+-+en
 *
 * @property-read \SmartSender\Common\Collection $variables
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Contact extends PlainContact
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'tags' => Tag::class,
        'funnels' => Funnel::class,
        'variables' => Variable::class,
    ];
}
