<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Tags;

use SmartSender\Common\Models\Console\Tag;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect tags response.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectTagsResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Tag
    {
        return Tag::create($context);
    }
}
