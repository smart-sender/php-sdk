<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts;

use SmartSender\Interaction\Endpoints\Console\Contacts\CollectContactsEndpoint;

/**
 * Search contacts endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class SearchContactsEndpoint extends CollectContactsEndpoint
{
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('%s/search', parent::getType());
    }
}
