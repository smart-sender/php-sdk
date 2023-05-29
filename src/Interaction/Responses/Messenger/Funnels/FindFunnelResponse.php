<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger\Funnels;

use SmartSender\Common\Models\Messenger\Funnel;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Find funnel response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Funnels\FindFunnelEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class FindFunnelResponse extends BaseResponse
{
    /**
     * Retrieve chat.
     *
     * @return \SmartSender\Common\Models\Messenger\Funnel
     */
    public function getChat(): Funnel
    {
        return Funnel::create($this->response->all());
    }
}
