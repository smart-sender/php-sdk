<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes;

use SmartSender\Common\Models\Messenger\Note;
use SmartSender\Interaction\Responses\General\CollectResponse;

/**
 * Collect contact notes response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\CollectContactNotesEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class CollectContactNotesResponse extends CollectResponse
{
    /**
     * @inheritDoc
     */
    protected function createModel(array $context): Note
    {
        return Note::create($this->response->all());
    }
}
