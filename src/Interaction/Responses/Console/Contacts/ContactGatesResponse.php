<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts;

use SmartSender\Common\Models\Model;
use SmartSender\Common\Models\Messenger\Gate;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Contact gates response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\ContactGatesEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ContactGatesResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Model
    {
        return Gate::create($context);
    }
}
