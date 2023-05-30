<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console;

use SmartSender\Foundation\Service;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Endpoints\Console\Tags\CreateTagEndpoint;
use SmartSender\Interaction\Endpoints\Console\Tags\DeleteTagEndpoint;
use SmartSender\Interaction\Endpoints\Console\Tags\UpdateTagEndpoint;
use SmartSender\Interaction\Responses\Console\Tags\CreateTagResponse;
use SmartSender\Interaction\Endpoints\Console\Tags\CollectTagsEndpoint;
use SmartSender\Interaction\Responses\Console\Tags\CollectTagsResponse;

/**
 * With this API, you can view, add, edit, and delete tags in a project.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676411819/Tags+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class TagService extends Service
{
    /**
     * Retrieve tags.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Tags\CollectTagsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectTagsResponse
    {
        return $this->createCallee()->call(new CollectTagsEndpoint($resource));
    }

    /**
     * Creates new tag.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Tags\CreateTagResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function create(array $resource): CreateTagResponse
    {
        return $this->createCallee()->call(new CreateTagEndpoint($resource));
    }

    /**
     * Update given tag.
     *
     * @param int   $tagId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function update(int $tagId, array $resource): StateResponse
    {
        return $this->createCallee()->call(new UpdateTagEndpoint($tagId, $resource));
    }

    /**
     * Delete given tag.
     *
     * @param int $tagId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function delete(int $tagId): StateResponse
    {
        return $this->createCallee()->call(new DeleteTagEndpoint($tagId));
    }
}
