<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Tests;

use SmartSender\Client;
use SmartSender\Manager;

/**
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class TestX extends TestCase
{
    public function testX()
    {
        $client = new Client('L0cRxqxrjtfKNVzuEoGc4Gl2HZQBB9XKZKx1G9kO3YYsQFLobqVDM38yaH0A');

        $manager = new Manager($client);

        $response = $manager->messenger->chats->select(1234)->close();

        var_dump($response->getState());
    }
}
