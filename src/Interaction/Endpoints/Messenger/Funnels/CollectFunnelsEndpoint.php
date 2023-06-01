<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Funnels;

use GuzzleHttp\RequestOptions;
use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Messenger\Funnels\CollectFunnelsResponse;

/**
 * Collect funnels endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CollectFunnelsEndpoint extends DataEndpoint
{
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return 'funnels';
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
    public function getAdapted(PendingResponse $response): CollectFunnelsResponse
    {
        return new CollectFunnelsResponse($response);
    }
}
