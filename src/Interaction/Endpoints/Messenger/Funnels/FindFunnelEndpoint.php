<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Funnels;

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Contracts\Endpoint as EndpointContract;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Messenger\Funnels\FindFunnelResponse;

/**
 * Find funnel endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class FindFunnelEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $funnelId;

    /**
     * Setup funnel identifier.
     *
     * @param int $funnelId
     */
    public function __construct(int $funnelId)
    {
        $this->funnelId = $funnelId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('funnels/%s', $this->funnelId);
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
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_GET;
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): FindFunnelResponse
    {
        return new FindFunnelResponse($response);
    }
}
