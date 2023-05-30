<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Messenger;

use SmartSender\Common\Models\Messenger\Operator;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect operators response.
 *
 * @see \SmartSender\Interaction\Endpoints\Messenger\Operators\CollectOperatorsEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectOperatorsResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Operator
    {
        return Operator::create($context);
    }
}
