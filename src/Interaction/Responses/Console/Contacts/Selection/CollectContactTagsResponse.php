<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts\Selection;

use SmartSender\Common\Models\Console\Tag;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect contact tags response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Tags\CollectContactTagsEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectContactTagsResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Tag
    {
        return Tag::create($context);
    }
}
