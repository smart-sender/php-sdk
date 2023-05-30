<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts\Selection;

use SmartSender\Contracts\Endpoint as EndpointContract;

/**
 * Selected contact tag endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
abstract class SelectedContactTagEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $tagId;

    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup contact and tag identifiers.
     *
     * @param int $contactId
     * @param int $tagId
     */
    public function __construct(int $contactId, int $tagId)
    {
        $this->tagId = $tagId;
        $this->contactId = $contactId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/tags/%s', $this->contactId, $this->tagId);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }
}
