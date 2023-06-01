<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Messenger\Messages;

use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Specifications\Request as RequestSpecification;
use SmartSender\Interaction\Responses\Messenger\Messages\SendMessageResponse;

/**
 * Send message endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class SendMessageEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup contact identifier and context.
     *
     * @param int   $contactId
     * @param array $context
     */
    public function __construct(int $contactId, array $context)
    {
        $this->contactId = $contactId;

        // boot ...
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/messages', $this->contactId);
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
    public function getAdapted(PendingResponse $response): SendMessageResponse
    {
        return new SendMessageResponse($response);
    }
}
