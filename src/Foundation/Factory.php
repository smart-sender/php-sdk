<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation;

use InvalidArgumentException;
use SmartSender\Contracts\Client as ClientContract;

/**
 * Abstract base class for all service factories used
 * to expose service instances through manager.
 *
 * @see \SmartSender\Manager
 */
abstract class Factory
{
    /**
     * @var array
     */
    private array $services = [];

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
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name)
    {
        if (!is_null($serviceClass = $this->getServiceClass($name))) {
            // if service was not previously initialized
            if (!array_key_exists($name, $this->services)) {
                // initialize new service with current client
                $this->services[$name] = new $serviceClass($this->client);
            }

            return $this->services[$name];
        }

        throw new InvalidArgumentException(sprintf('Service [%s] not supported', $name));
    }

    /**
     * Verifies for service existence.
     *
     * @param string $name
     *
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return array_key_exists($name, $this->services);
    }

    /**
     * Retrieve service class.
     *
     * @param string $name
     *
     * @return string|null
     */
    protected function getServiceClass(string $name): ?string
    {
        if (array_key_exists($name, $map = $this->getServiceMap())) {
            // retrieve value from map
            return $map[$name];
        }

        return null;
    }

    /**
     * Retrieve service map.
     *
     * @return array
     */
    abstract protected function getServiceMap(): array;
}
