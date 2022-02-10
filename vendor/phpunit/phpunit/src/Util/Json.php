<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

<<<<<<< HEAD
use const JSON_PRETTY_PRINT;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;
use function count;
use function is_array;
use function is_object;
use function json_decode;
use function json_encode;
use function json_last_error;
use function ksort;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PHPUnit\Framework\Exception;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Json
{
    /**
<<<<<<< HEAD
     * Prettify json string.
=======
     * Prettify json string
>>>>>>> parent of 31cfa1b1 (p)
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public static function prettify(string $json): string
    {
<<<<<<< HEAD
        $decodedJson = json_decode($json, false);

        if (json_last_error()) {
=======
        $decodedJson = \json_decode($json, false);

        if (\json_last_error()) {
>>>>>>> parent of 31cfa1b1 (p)
            throw new Exception(
                'Cannot prettify invalid json'
            );
        }

<<<<<<< HEAD
        return json_encode($decodedJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * To allow comparison of JSON strings, first process them into a consistent
     * format so that they can be compared as strings.
     *
     * @return array ($error, $canonicalized_json)  The $error parameter is used
     *               to indicate an error decoding the json. This is used to avoid ambiguity
     *               with JSON strings consisting entirely of 'null' or 'false'.
     */
    public static function canonicalize(string $json): array
    {
        $decodedJson = json_decode($json);

        if (json_last_error()) {
=======
        return \json_encode($decodedJson, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES | \JSON_UNESCAPED_UNICODE);
    }

    /*
     * To allow comparison of JSON strings, first process them into a consistent
     * format so that they can be compared as strings.
     * @return array ($error, $canonicalized_json)  The $error parameter is used
     * to indicate an error decoding the json.  This is used to avoid ambiguity
     * with JSON strings consisting entirely of 'null' or 'false'.
     */
    public static function canonicalize(string $json): array
    {
        $decodedJson = \json_decode($json);

        if (\json_last_error()) {
>>>>>>> parent of 31cfa1b1 (p)
            return [true, null];
        }

        self::recursiveSort($decodedJson);

<<<<<<< HEAD
        $reencodedJson = json_encode($decodedJson);
=======
        $reencodedJson = \json_encode($decodedJson);
>>>>>>> parent of 31cfa1b1 (p)

        return [false, $reencodedJson];
    }

<<<<<<< HEAD
    /**
     * JSON object keys are unordered while PHP array keys are ordered.
     *
=======
    /*
     * JSON object keys are unordered while PHP array keys are ordered.
>>>>>>> parent of 31cfa1b1 (p)
     * Sort all array keys to ensure both the expected and actual values have
     * their keys in the same order.
     */
    private static function recursiveSort(&$json): void
    {
<<<<<<< HEAD
        if (!is_array($json)) {
=======
        if (!\is_array($json)) {
>>>>>>> parent of 31cfa1b1 (p)
            // If the object is not empty, change it to an associative array
            // so we can sort the keys (and we will still re-encode it
            // correctly, since PHP encodes associative arrays as JSON objects.)
            // But EMPTY objects MUST remain empty objects. (Otherwise we will
            // re-encode it as a JSON array rather than a JSON object.)
            // See #2919.
<<<<<<< HEAD
            if (is_object($json) && count((array) $json) > 0) {
=======
            if (\is_object($json) && \count((array) $json) > 0) {
>>>>>>> parent of 31cfa1b1 (p)
                $json = (array) $json;
            } else {
                return;
            }
        }

<<<<<<< HEAD
        ksort($json);
=======
        \ksort($json);
>>>>>>> parent of 31cfa1b1 (p)

        foreach ($json as $key => &$value) {
            self::recursiveSort($value);
        }
    }
}
