<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\General;

use SmartSender\Common\General\State;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * State response.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class StateResponse extends BaseResponse
{
    /**
     * Retrieve state.
     *
     * @return \SmartSender\Common\General\State
     */
    public function getState(): State
    {
        return new State($this->getValueFromResponse('state'));
    }
}
