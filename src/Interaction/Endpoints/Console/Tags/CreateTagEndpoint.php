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
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Console\Tags\CreateTagResponse;

/**
 * Create tag endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CreateTagEndpoint extends DataEndpoint
{
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return 'tags';
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_POST;
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): CreateTagResponse
    {
        return new CreateTagResponse($response);
    }

}
