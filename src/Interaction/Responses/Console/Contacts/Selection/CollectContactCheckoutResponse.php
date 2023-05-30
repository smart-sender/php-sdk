<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts\Selection;

use SmartSender\Common\Models\Console\ProductEssence;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect contact funnels response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Checkout\CollectContactCheckoutEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectContactCheckoutResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): ProductEssence
    {
        return ProductEssence::create($context);
    }
}
