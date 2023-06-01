<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Invoices;

use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CreateContactNoteResponse;

/**
 * Record contact invoice endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class RecordContactInvoiceEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup contact identifier and resource.
     *
     * @param int   $contactId
     * @param array $resource
     */
    public function __construct(int $contactId, array $resource)
    {
        $this->contactId = $contactId;

        // boot ...
        parent::__construct($resource);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/invoices', $this->contactId);
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_PUT;
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): CreateContactNoteResponse
    {
        return new CreateContactNoteResponse($response);
    }
}
