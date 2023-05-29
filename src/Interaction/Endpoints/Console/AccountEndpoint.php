<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console;

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Contracts\Endpoint as EndpointContract;
use SmartSender\Interaction\Responses\Console\AccountResponse;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Account endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class AccountEndpoint implements EndpointContract
{
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return 'me';
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_GET;
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): AccountResponse
    {
        return new AccountResponse($response);
    }
}
