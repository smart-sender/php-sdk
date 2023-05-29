<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models\Console;

use SmartSender\Common\Models\Model;

/**
 * Console variable.
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
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Variable extends Model
{
    //
}
