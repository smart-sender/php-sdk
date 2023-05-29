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
 * Console contact.
 *
 * @property-read \SmartSender\Common\Models\Console\Variable $variables
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Contact extends PlainContact
{
    /**
     * @inheritdoc
     */
    protected const CASTERS = [
        'tags' => [
            'nested' => true,
            'class' => Tag::class,
        ],
        'funnels' => [
            'nested' => true,
            'class' => Funnel::class,
        ],
        'variables' => [
            'nested' => true,
            'class' => Variable::class,
        ],
    ];
}
