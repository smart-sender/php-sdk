<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts;

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Endpoints\Console\ContactEndpoint;
use SmartSender\Interaction\Responses\Console\Contacts\FindContactResponse;

/**
 * Find contact endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class FindContactEndpoint extends ContactEndpoint
{
    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): FindContactResponse
    {
        return new FindContactResponse($response);
    }
}
