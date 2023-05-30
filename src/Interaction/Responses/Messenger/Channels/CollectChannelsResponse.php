<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger\Channels;

use SmartSender\Common\Models\Messenger\Channel;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect channels response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Channels\CollectChannelsEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectChannelsResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Channel
    {
        return Channel::create($context);
    }
}
