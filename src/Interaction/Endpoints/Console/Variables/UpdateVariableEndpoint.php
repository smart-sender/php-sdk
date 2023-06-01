<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Variables;

use SmartSender\Interaction\Endpoints\DataEndpoint;
use SmartSender\Interaction\Responses\PendingResponse;
use SmartSender\Interaction\Responses\General\StateResponse;
use SmartSender\Specifications\Request as RequestSpecification;

/**
 * Update variable endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class UpdateVariableEndpoint extends DataEndpoint
{
    /**
     * @var int
     */
    private int $variableId;

    /**
     * Setup variable identifier and context.
     *
     * @param int   $variableId
     * @param array $context
     */
    public function __construct(int $variableId, array $context)
    {
        $this->variableId = $variableId;

        // boot ...
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('variables/%s', $this->variableId);
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
