<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Common\Models;

/**
 * This object describes a registered user in Smart Sender.
 *
 * @link https://smartsendereu.atlassian.net/wiki/spaces/docsru/pages/1676543001/User+-+en
 *
 * @property-read int  $id
 * @property-read bool $subscribed
 *
 * @property-read string $email
 * @property-read string $phone
 * @property-read string $photo
 * @property-read string $locale
 * @property-read string $timezone
 * @property-read string $fullName
 * @property-read string $firstName
 * @property-read string $createdAt
 * @property-read string $preferredCurrency
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class User extends Model
{
    //
}
