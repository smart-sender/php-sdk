<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Products;

use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Console\Products\SingleProductResponse;

/**
 * Create product endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CreateProductEndpoint extends DataEndpoint
{
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return 'products';
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
    public function getAdapted(PendingResponse $response): SingleProductResponse
    {
        return new SingleProductResponse($response);
    }

}
