<?php declare(strict_types=1);

/**
 * This file is part of Smart Web Services package
 *
 * (c) Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SmartSender\Interaction;

/**
 * JSON parser. Includes encoding & decoding with in base64.
 *
 * @author Serdiuk Oleksandr <serdiuk.oleksandr@gmail.com>
 */
class Parser
{
    /**
     * Encodes to JSON, validating the errors.
     *
     * @param mixed $data
     *
     * @return string
     *
     * @throws \JsonException
     */
    public static function jsonEncode($data): string
    {
        return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
    }

    /**
     * Decodes from JSON, validating the errors.
     *
     * @param string $json
     *
     * @return array
     *
     * @throws \JsonException
     */
    public static function jsonDecode(string $json): array
    {
        return json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    }
}
