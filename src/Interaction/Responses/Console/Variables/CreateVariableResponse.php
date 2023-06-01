<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Variables;

use SmartSender\Common\Models\Console\Variable;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Create tag response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Variables\CreateVariableEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CreateVariableResponse extends BaseResponse
{
    /**
     * Retrieve tag.
     *
     * @return \SmartSender\Common\Models\Console\Variable
     */
    public function getVariable(): Variable
    {
        return Variable::create($this->response->all());
    }
}
