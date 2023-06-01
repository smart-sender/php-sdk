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

use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Update tag endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class UpdateTagEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $tagId;

    /**
     * Setup tag identifier and context.
     *
     * @param int   $tagId
     * @param array $context
     */
    public function __construct(int $tagId, array $context)
    {
        $this->tagId = $tagId;

        // boot ...
        parent::__construct($context);
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
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_PUT;
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): StateResponse
    {
        return new StateResponse($response);
    }
}
