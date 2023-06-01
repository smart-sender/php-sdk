<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Tags;

use SmartSender\Common\Models\Console\Tag;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Create tag response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Tags\CreateTagEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CreateTagResponse extends BaseResponse
{
    /**
     * Retrieve tag.
     *
     * @return \SmartSender\Common\Models\Console\Tag
     */
    public function getTag(): Tag
    {
        return Tag::create($this->response->all());
    }
}
