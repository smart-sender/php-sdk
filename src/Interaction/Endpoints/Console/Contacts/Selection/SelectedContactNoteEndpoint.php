<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Endpoints\Console\Contacts\Selection;

use SmartSender\Contracts\Endpoint as EndpointContract;

/**
 * Selected contact note endpoint.
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
abstract class SelectedContactNoteEndpoint implements EndpointContract
{
    /**
     * @var int
     */
    private int $noteId;

    /**
     * @var int
     */
    private int $contactId;

    /**
     * Setup contact and note identifiers.
     *
     * @param int $contactId
     * @param int $noteId
     */
    public function __construct(int $contactId, int $noteId)
    {
        $this->noteId = $noteId;
        $this->contactId = $contactId;
    }

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return sprintf('contacts/%s/notes/%s', $this->contactId, $this->noteId);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(): array
    {
        return [];
    }
}
