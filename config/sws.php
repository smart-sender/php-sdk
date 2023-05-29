<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Smart Sender Version.
    |--------------------------------------------------------------------------
    |
    | This option defines "default" platform version
    | that will be used through every request.
    |
    */

    'version' => getenv('SMART_SENDER_VERSION') ?: 'v1',

    /*
    |--------------------------------------------------------------------------
    | Smart Sender Access Token.
    |--------------------------------------------------------------------------
    |
    | This option defines "default" platform access token
    | that will be used through every request.
    |
    */

    'accessToken' => getenv('SMART_SENDER_ACCESS_TOKEN') ?: 'abc1234',

    /*
    |--------------------------------------------------------------------------
    | Smart Sender Base URI.
    |--------------------------------------------------------------------------
    |
    | This option defines "default" platform base uri
    | that will be used through every request.
    |
    */

    'baseUri' => getenv('SMART_SENDER_BASE_URI') ?: 'https://api.smartsender.com',

];