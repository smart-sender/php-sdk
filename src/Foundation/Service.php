<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation;

use SmartSender\Interaction\Callee;
use SmartSender\Contracts\Client as ClientContract;

/**
 * Abstract base class for all services.
 */
abstract class Service
{
    /**
     * @var \SmartSender\Contracts\Client
     */
    protected ClientContract $client;

    /**
     * Initializes a new service.
     *
     * @param \SmartSender\Contracts\Client $client
     */
    public function __construct(ClientContract $client)
    {
        $this->client = $client;
    }

    /**
     * Creates callee.
     *
     * @return \SmartSender\Interaction\Callee
     */
    protected function createCallee(): Callee
    {
        return new Callee($this->client);
    }
}
