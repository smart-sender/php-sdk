<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
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
 * With this API, you can view, add, edit, and delete products in a project.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676412034/Products+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class ProductService extends Service
{
    /**
     * Allows you to view the created products in the project.
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
     * Allows you to create a product in a project.
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
     * Allows you to update the selected product in the project.
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
     * Allows you to remove an existing product.
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
