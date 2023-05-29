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

use GuzzleHttp\RequestOptions;
use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Console\Contacts\CollectContactsResponse;

/**
 * Collect contacts endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectContactsEndpoint extends DataEndpoint
{
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return 'contacts';
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
        return [
            RequestOptions::QUERY => $this->context,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): CollectContactsResponse
    {
        return new CollectContactsResponse($response);
    }
}
