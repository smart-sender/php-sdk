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
 * Update product endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class UpdateProductEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $productId;

    /**
     * Setup product identifier and context.
     *
     * @param int   $productId
     * @param array $context
     */
    public function __construct(int $productId, array $context)
    {
        $this->productId = $productId;

        // boot ...
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('products/%s', $this->productId);
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
    public function getAdapted(PendingResponse $response): SingleProductResponse
    {
        return new SingleProductResponse($response);
    }
}
