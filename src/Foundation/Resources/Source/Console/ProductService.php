<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console;

use SmartSender\Foundation\Service;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Responses\Console\Products\SingleProductResponse;
use SmartSender\Interaction\Endpoints\Console\Products\CreateProductEndpoint;
use SmartSender\Interaction\Endpoints\Console\Products\DeleteProductEndpoint;
use SmartSender\Interaction\Endpoints\Console\Products\UpdateProductEndpoint;
use SmartSender\Interaction\Endpoints\Console\Products\CollectProductsEndpoint;
use SmartSender\Interaction\Responses\Console\Products\CollectProductsResponse;

/**
 * Console product service.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class ProductService extends Service
{
    /**
     * Retrieve products.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Products\CollectProductsResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function collect(array $resource): CollectProductsResponse
    {
        return $this->createCallee()->call(new CollectProductsEndpoint($resource));
    }

    /**
     * Creates new product.
     *
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Products\SingleProductResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function create(array $resource): SingleProductResponse
    {
        return $this->createCallee()->call(new CreateProductEndpoint($resource));
    }

    /**
     * Update given product.
     *
     * @param int   $productId
     * @param array $resource
     *
     * @return \SmartSender\Interaction\Responses\Console\Products\SingleProductResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function update(int $productId, array $resource): SingleProductResponse
    {
        return $this->createCallee()->call(new UpdateProductEndpoint($productId, $resource));
    }

    /**
     * Delete given product.
     *
     * @param int $productId
     *
     * @return \SmartSender\Interaction\Responses\General\StateResponse
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     * @throws \SmartSender\Exceptions\InvalidResponseException
     */
    public function delete(int $productId): StateResponse
    {
        return $this->createCallee()->call(new DeleteProductEndpoint($productId));
    }
}
