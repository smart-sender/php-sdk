<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses\Console\Contacts\Selection\Notes;

use SmartSender\Common\Models\Messenger\Note;
use SmartSender\Interaction\Responses\BaseResponse;

/**
 * Creates contact note response.
 *
 * @see \SmartSender\Interaction\Endpoints\Console\Contacts\Selection\Notes\CreateContactNoteEndpoint
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class CreateContactNoteResponse extends BaseResponse
{
    /**
     * Retrieve note.
     *
     * @return \SmartSender\Common\Models\Messenger\Note
     */
    public function getNote(): Note
    {
        return Note::create($this->response->all());
    }
}
