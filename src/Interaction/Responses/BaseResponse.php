<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses;

use SmartSender\Common\Collection;

/**
 * Base Europa Response.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class BaseResponse
{
    /**
     * @var \SmartSender\Interaction\Responses\PendingResponse
     */
    protected PendingResponse $response;

    /**
     * Setup pending response.
     *
     * @param \SmartSender\Interaction\Responses\PendingResponse $response
     */
    public function __construct(PendingResponse $response)
    {
        $this->response = $response;
    }

    /**
     * Collect base response.
     *
     * @return \SmartSender\Interaction\Responses\PendingResponse
     */
    public function getResponse(): PendingResponse
    {
        return $this->response;
    }

    /**
     * Retrieve value from response.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getValueFromResponse(string $key, $default = null)
    {
        return $this->response->get($key, $default);
    }

    /**
     * Retrieve collection from response.
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return \SmartSender\Common\Collection
     */
    public function getCollectionFromResponse(string $key, $default = null): Collection
    {
        return new Collection($this->getValueFromResponse($key, $default));
    }
}
