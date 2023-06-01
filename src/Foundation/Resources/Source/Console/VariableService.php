<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
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
 * With this API, you can view, add, edit, and delete variables in a project.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575629/Variables+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class VariableService extends Service
{
    /**
     * Allows you to view the created variables in the project.
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
     * Allows you to create a new variable in the project.
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
     * Allows you to update an existing variable.
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
     * Allows you to delete an existing variable.
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
