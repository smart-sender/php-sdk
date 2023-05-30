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
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect products response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Products\CollectProductsEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectProductsResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Product
    {
        return Product::create($context);
    }
}
