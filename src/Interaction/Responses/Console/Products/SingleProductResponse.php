<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Products;

use SmartSender\Common\Models\Console\Product;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Single product response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Products\CreateProductEndpoint
 * @see \SmartSender\Interaction\Endpoints\Console\Products\UpdateProductEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SingleProductResponse extends BaseResponse
{
    /**
     * Retrieve tag.
     *
     * @return \SmartSender\Common\Models\Console\Product
     */
    public function getProduct(): Product
    {
        return Product::create($this->response->all());
    }
}
