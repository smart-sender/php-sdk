<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Variables;

use SmartSender\Common\Models\Console\Variable;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect variables response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Variables\CollectVariablesEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectVariablesResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Variable
    {
        return Variable::create($context);
    }
}
