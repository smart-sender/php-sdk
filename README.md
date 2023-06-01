# SmartSender PHP bindings

[![License](https://poser.pugx.org/smart-sender/php-sdk/license.svg)](https://packagist.org/packages/smart-sender/php-sdk)

The Smart Sender PHP library provides convenient access to the Smart Sender API from
applications written in the PHP language. It includes a pre-defined set of
classes for API resources that initialize themselves dynamically from API
responses which makes it compatible with a wide range of versions of the Smart Sender
API.

## Requirements

PHP 7.4 and later.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require smart-sender/php-sdk
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once 'vendor/autoload.php';
```

## Dependencies

The bindings require the following extensions in order to work properly:

-   [`curl`](https://secure.php.net/manual/en/book.curl.php),
-   [`json`](https://secure.php.net/manual/en/book.json.php)

The bindings require the following packages in order to work properly:

-   [`guzzlehttp/guzzle`](https://github.com/guzzlehttp/guzzle), version 7.0.1 or higher.

## Getting started

### Supported services:

- Console:
    - [`Tags API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676411819/Tags+API+-+en),
    - [`Cashiers API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444559/Payments+API-+en),
    - [`Contacts API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444281/Contacts+API+-+en),
    - [`Products API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676412034/Products+API+-+en),
    - [`Variables API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575629/Variables+API+-+en)

- Messenger
    - [`Funnels API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676673469/Funnels+API+-+en),
    - [`Messages API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575830/Messages+API+-+en),
    - [`Channels API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444598/Channels+API+-+en),
    - [`Operators API`](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676575799/Operators+API+-+en)

### Simple usage looks like:

```php
$manager = \SmartSender\Manager::withToken('uwWH632A3w47mK80iiC94yiMgGOfw3QNGIdjmnAX5eXqvgNkWGEKdaZQsQCJ');

$response = $manager->console->tags->create([
    'name' => 'Tag 1',
    'color' => '000000',
]);

$tag = $response->getTag();

echo $tag->id;
echo $tag->name;
```

## Documentation

See the [PHP API docs](https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676673382/API+integration+-+en).

## Configuration

### Managing variables

> **Note**
> Use Base URI setting only if the Smart Sender API URI has changed or you are using 
> a shim on your server that is similar to the Smart Sender API.

```php
// setup proxy url
putenv('SMART_SENDER_BASE_URI=https://proxy.com');

// setup access token
putenv('SMART_SENDER_ACCESS_TOKEN=test');

// setup proxy url
putenv('SMART_SENDER_VERSION=v2.2');
```

### Default manager

> **Note**
> Change the access token before calling the Smart Sender API methods.
> By default, a non-existent token is specified in the config, calls with which will give an error.

````php
// use the Smart Sender API client from default settings
$manager = \SmartSender\Manager::default();

// retrieve value from SMART_SENDER_ACCESS_TOKEN environment variable.
echo $manager->client->getAccessToken();
````
