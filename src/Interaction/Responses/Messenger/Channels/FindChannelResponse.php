<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger\Channels;

use SmartSender\Common\Models\Messenger\Channel;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Find channel response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Funnels\FindFunnelEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class FindChannelResponse extends BaseResponse
{
    /**
     * Retrieve channel.
     *
     * @return \SmartSender\Common\Models\Messenger\Channel
     */
    public function getChannel(): Channel
    {
        return Channel::create($this->response->all());
    }
}
