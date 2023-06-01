<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Messenger;

use SmartSender\Foundation\Service;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Responses\Messenger\CollectOperatorsResponse;
use SmartSender\Interaction\Endpoints\Messenger\Operators\CollectOperatorsEndpoint;
use SmartSender\Interaction\Endpoints\Messenger\Operators\SetOperatorInvolvementEndpoint;

/**
 * Using this API, you can view the connected operators within the service Smart Messenger
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575799/Operators+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class OperatorService extends Service
{
    /**
     * Allows you to view the connected operators in the project.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\CollectOperatorsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectOperatorsResponse
    {
        return $this->createCallee()->call(new CollectOperatorsEndpoint($resource));
    }

    /**
     * Allows you to change the status of automatic assignment by the system of incoming chat between operators.
     *
     * @param int   $operatorId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function setInvolvement(int $operatorId, array $resource): StateResponse
    {
        return $this->createCallee()->call(new SetOperatorInvolvementEndpoint($operatorId, $resource));
    }
}
