<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction\Responses;

use SmartSender\Common\Collection;
use SmartSender\Exceptions\BadResponseException;

/**
 * Monobank pending response.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class PendingResponse extends Collection
{
    /**
     * Setup validated context.
     *
     * @param array $context
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     */
    public function __construct(array $context)
    {
        $this->validate($context);

        // boot ...
        parent::__construct($context);
    }

    /**
     * Validate retrieved context.
     *
     * @param array $context
     *
     * @return void
     *
     * @throws \SmartSender\Exceptions\BadResponseException
     */
    protected function validate(array $context): void
    {
        if (array_key_exists('error', $context)) {
            // notifies for an error
            throw (new BadResponseException($context['error']['message'], $context['error']['code']))
                ->setDescription($context['error']['description'] ?? []);
        }
    }
}
