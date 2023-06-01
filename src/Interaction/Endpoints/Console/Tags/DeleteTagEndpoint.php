<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Tags;

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Contracts\Endpoint as EndpointContract;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Delete tag endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class DeleteTagEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $tagId;

    /**
     * Setup tag identifier.
     *
     * @param int $tagId
     */
    public function __construct(int $tagId)
    {
        $this->tagId = $tagId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('tags/%s', $this->tagId);
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
        return RequestSpecification::METHOD_DELETE;
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): StateResponse
    {
        return new StateResponse($response);
    }

}
