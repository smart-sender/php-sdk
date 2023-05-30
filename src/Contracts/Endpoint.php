<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Contracts;

use SmartSender\Interaction\Responses\PendingResponse;

/**
 * Defines endpoint.
 *
 * @link https://docs.guzzlephp.org
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
interface Endpoint
{
    /**
     * Endpoint type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Endpoint method.
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Endpoint parameters.
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Adapts endpoint pending response.
     *
     * @param \SmartSender\Interaction\Responses\PendingResponse $response
     *
     * @return mixed
     */
    public function getAdapted(PendingResponse $response);
}
