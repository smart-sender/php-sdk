<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender;

use SmartSender\Foundation\Resources\CoreFactory;
use SmartSender\Contracts\Client as ClientContract;

/**
 * Package manager.
 *
 * @property-read \SmartSender\Foundation\Resources\Source\ConsoleFactory   $console
 * @property-read \SmartSender\Foundation\Resources\Source\MessengerFactory $messenger
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Manager
{
    /**
     * @var \SmartSender\Contracts\Client
     */
    private ClientContract $client;

    /**
     * @var \SmartSender\Foundation\Resources\CoreFactory|null
     */
    private ?CoreFactory $factory = null;

    /**
     * Setup client.
     *
     * @param \SmartSender\Contracts\Client $client
     */
    public function __construct(ClientContract $client)
    {
        $this->client = $client;
    }

    /**
     * Creates default instance.
     *
     * @return static
     */
    public static function default(): self
    {
        $client = Client::default();

        return new self($client);
    }

    /**
     * Retrieve given property.
     *
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name)
    {
        if (null === $this->factory) {
            // initialize new factory instance
            $this->factory = new CoreFactory($this->client);
        }

        return $this->factory->__get($name);
    }
}
