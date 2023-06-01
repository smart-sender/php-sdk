<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts;

use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Fire contact endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class FireContactEndpoint extends DataEndpoint
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
        return sprintf('contacts/%s/fire', $this->contactId);
    }

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return RequestSpecification::METHOD_POST;
    }

    /**
     * @inheritDoc
     */
    public function getAdapted(PendingResponse $response): StateResponse
    {
        return new StateResponse($response);
    }
}
