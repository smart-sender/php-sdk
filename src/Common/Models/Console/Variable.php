<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk@smartsender.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console;

use SmartSender\Common\Models\Model;

/**
 * This object describes a user variable. If the user does not have the variable, the default value will be used.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676576027/Variable+-+en
 *
 * @property-read int    $id
 * @property-read string $name
 * @property-read array  $content
 *
 * @property-read string|null $value
 * @property-read string|null $description
 *
 * @property-read string $createdAt
 * @property-read string $updatedAt
 *
 * @author Serdiuk Oleksandr <serdiuk@smartsender.com>
 */
class Variable extends Model
{
    //
}
