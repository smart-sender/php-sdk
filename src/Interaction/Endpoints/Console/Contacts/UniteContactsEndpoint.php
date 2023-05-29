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

use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Endpoints\Console\ContactEndpoint;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Unite contacts endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class UniteContactsEndpoint extends ContactEndpoint
{
    /**
     * @var int
     */
    private int $targetContactId;

    /**
     * Setup contact identifiers.
     *
     * @param int $contactId
     * @param int $targetContactId
     */
    public function __construct(int $contactId, int $targetContactId)
    {
        $this->targetContactId = $targetContactId;

        // boot ...
        parent::__construct($contactId);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('%s/unite/%s', parent::getType(), $this->getTargetContactId());
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

    /**
     * Retrieve target contact identifier.
     *
     * @return int
     */
    protected function getTargetContactId(): int
    {
        return $this->targetContactId;
    }
}
