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

use SmartSender\Common\Collection;
use SmartSender\Common\Models\Tag;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect tags response.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectTagsResponse extends CollectResponse
{
    /**
     * Retrieve tags collection.
     *
     * @return \SmartSender\Common\Collection
     */
    public function getCollection(): Collection
    {
        $tags = array_map([$this, 'createTag'], $this->getValueFromResponse('collection'));

        return new Collection($tags);
    }

    /**
     * Creates tag from context.
     *
     * @param array $context
     *
     * @return \SmartSender\Common\Models\Tag
     */
    protected function createTag(array $context): Tag
    {
        return Tag::create($context);
    }
}
