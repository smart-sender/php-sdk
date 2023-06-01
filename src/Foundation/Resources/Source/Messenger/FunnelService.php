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
use SmartSender\Interaction\Endpoints\Messenger\Funnels\FindFunnelEndpoint;
use SmartSender\Interaction\Responses\Messenger\Funnels\FindFunnelResponse;
use SmartSender\Interaction\Endpoints\Messenger\Funnels\CollectFunnelsEndpoint;
use SmartSender\Interaction\Responses\Messenger\Funnels\CollectFunnelsResponse;

/**
 * Using this API, you can view the created funnels in the project.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676673469/Funnels+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class FunnelService extends Service
{
    /**
     * Allows you to view the created funnels.
     *
     * @param int $funnelId
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Funnels\FindFunnelResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function find(int $funnelId): FindFunnelResponse
    {
        return $this->createCallee()->call(new FindFunnelEndpoint($funnelId));
    }

    /**
     * Allows you to get information about the selected funnel.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Messenger\Funnels\CollectFunnelsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectFunnelsResponse
    {
        return $this->createCallee()->call(new CollectFunnelsEndpoint($resource));
    }
}
