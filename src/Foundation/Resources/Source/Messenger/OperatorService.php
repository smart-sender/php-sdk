<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
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
 * Operator service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class OperatorService extends Service
{
    /**
     * Retrieve funnels.
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
     * Setup operator involvement.
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
