<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender;

use SmartSender\Contracts\Client as ClientContract;

/**
 * Base client.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Client implements ClientContract
{
    /**
     * @var string
     */
    private string $accessToken;

    /**
     * Setup access token.
     *
     * @param string $accessToken
     */
    public function __construct(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Creates default instance.
     *
     * @return static
     */
    public static function default(): self
    {
        $accessToken = Config::getInstance()->getValue('accessToken');

        return new self($accessToken);
    }

    /**
     * @inheritDoc
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
