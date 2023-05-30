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
use SmartSender\Exceptions\BadResponseException;
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

        try {
            $contacts = $manager->console->contacts->collect([
                'page' => 1,
                'limitation' => 10,
            ]);
        } catch (BadResponseException $e) {
            var_dump($e->getDescription());

            throw $e;
        }

        /** @var \SmartSender\Common\Models\Console\Contact $contact */
        $contact = $contacts->getCollection()->first();

        var_dump($contact->fullName);

        $response = $manager->console->contacts->select($contact->id)->notes()->create([
            'text' => 'Some text goes here',
        ]);

        var_dump($response->getNote()->jsonSerialize());
    }
}
