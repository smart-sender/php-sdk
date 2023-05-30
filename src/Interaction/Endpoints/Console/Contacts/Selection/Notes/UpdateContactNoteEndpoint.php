<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes;

use GuzzleHttp\RequestOptions;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Endpoints\Console\Contacts\Selection\SelectedContactNoteEndpoint;

/**
 * Update contact note endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class UpdateContactNoteEndpoint extends SelectedContactNoteEndpoint
{
    /**
     * @var array
     */
    private array $resource;

    /**
     * Setup contact and note identifiers with in resource.
     *
     * @param int   $contactId
     * @param int   $noteId
     * @param array $resource
     */
    public function __construct(int $contactId, int $noteId, array $resource)
    {
        $this->resource = $resource;

        // boot ...
        parent::__construct($contactId, $noteId);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [
            RequestOptions::JSON => $this->resource,
        ];
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
    public function getAdapted(PendingResponse $response): StateResponse
    {
        return new StateResponse($response);
    }
}
