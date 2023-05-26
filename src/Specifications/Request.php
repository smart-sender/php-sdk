<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Specifications;

/**
 * Defines request.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
interface Request
{
    /**
     * Method GET.
     */
    public const METHOD_GET = 'GET';

    /**
     * Method PUT.
     */
    public const METHOD_PUT = 'PUT';

    /**
     * Method HEAD.
     */
    public const METHOD_HEAD = 'HEAD';

    /**
     * Method POST.
     */
    public const METHOD_POST = 'POST';

    /**
     * Method PURGE.
     */
    public const METHOD_PURGE = 'PURGE';

    /**
     * Method TRACE.
     */
    public const METHOD_TRACE = 'TRACE';

    /**
     * Method PATCH.
     */
    public const METHOD_PATCH = 'PATCH';

    /**
     * Method DELETE.
     */
    public const METHOD_DELETE = 'DELETE';

    /**
     * Method OPTIONS;
     */
    public const METHOD_OPTIONS = 'OPTIONS';

    /**
     * Method CONNECT.
     */
    public const METHOD_CONNECT = 'CONNECT';
}
