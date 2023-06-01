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

use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Contracts\Endpoint as EndpointContract;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes\CreateContactNoteResponse;

/**
 * Find contact invoice endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class FindContactInvoiceEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $contactId;

    /**
     * @var string
     */
    private string $orderId;

    /**
     * Setup contact and order identifier.
     *
     * @param int    $contactId
     * @param string $orderId
     */
    public function __construct(int $contactId, string $orderId)
    {
        $this->orderId = $orderId;
        $this->contactId = $contactId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/invoices/%s', $this->contactId, $this->orderId);
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_GET;
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): CreateContactNoteResponse
    {
        return new CreateContactNoteResponse($response);
    }
}
