<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Foundation\Resources\Source\Console\Contacts;

use SmartSender\Foundation\Service;
use SmartSender\Contracts\Client as ClientContract;

/**
 * Abstract contact service.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676444281/Contacts+API+-+en
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
abstract class SelectedContactService extends Service
{
    /**
     * @var int
     */
    protected int $contactId;

    /**
     * Setup client and contact identifier.
     *
     * @param \SmartSender\Contracts\Client $client
     * @param int                           $contactId
     */
    public function __construct(ClientContract $client, int $contactId)
    {
        $this->contactId = $contactId;

        // boot ...
        parent::__construct($client);
    }
}
