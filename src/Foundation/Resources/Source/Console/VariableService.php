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
use SmartSender\Interaction\Endpoints\Console\Variables\CreateVariableEndpoint;
use SmartSender\Interaction\Endpoints\Console\Variables\DeleteVariableEndpoint;
use SmartSender\Interaction\Endpoints\Console\Variables\UpdateVariableEndpoint;
use SmartSender\Interaction\Responses\Console\Variables\CreateVariableResponse;
use SmartSender\Interaction\Endpoints\Console\Variables\CollectVariablesEndpoint;
use SmartSender\Interaction\Responses\Console\Variables\CollectVariablesResponse;

/**
 * Console variable service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class VariableService extends Service
{
    /**
     * Retrieve tags.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Variables\CollectVariablesResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectVariablesResponse
    {
        return $this->createCallee()->call(new CollectVariablesEndpoint($resource));
    }

    /**
     * Creates new tag.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Variables\CreateVariableResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function create(array $resource): CreateVariableResponse
    {
        return $this->createCallee()->call(new CreateVariableEndpoint($resource));
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
        return $this->createCallee()->call(new UpdateVariableEndpoint($tagId, $resource));
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
        return $this->createCallee()->call(new DeleteVariableEndpoint($tagId));
    }
}
