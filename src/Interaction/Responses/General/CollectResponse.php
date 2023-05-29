<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\General;

use SmartSender\Common\Collection;
use SmartSender\Common\Models\Model;
use SmartSender\Common\General\Cursor;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Collect response.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
abstract class CollectResponse extends BaseResponse
{
    /**
     * Retrieve cursor.
     *
     * @return \SmartSender\Common\General\Cursor
     */
    public function getCursor(): Cursor
    {
        return Cursor::create($this->getValueFromResponse('cursor'));
    }

    /**
     * Retrieve collection.
     *
     * @return \SmartSender\Common\Collection
     */
    public function getCollection(): Collection
    {
        $tags = array_map([$this, 'createModel'], $this->getValueFromResponse('collection'));

        return new Collection($tags);
    }

    /**
     * Creates model.
     *
     * @param array $context
     *
     * @return \SmartSender\Common\Models\Model
     */
    abstract protected function createModel(array $context): Model;
}
