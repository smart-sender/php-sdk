<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints;

use GuzzleHttp\RequestOptions;
use SmartSender\Contracts\Endpoint as EndpointContract;

/**
 * Defines data endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
abstract class DataEndpoint implements EndpointContract
{
    /**
     * @var array
     */
    protected array $context;

    /**
     * Setup context.
     *
     * @param array $context
     */
    public function __construct(array $context)
    {
        $this->context = $context;
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [
            RequestOptions::JSON => $this->context,
        ];
    }
}
