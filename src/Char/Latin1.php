<?php

/*
 * This file is part of the Iphpjs package.
 *
 * (c) NetworkRanger <admin@iphpjs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iphpjs\Encoder\Char;


use Iphpjs\Contracts\Encoding\Encoder as EncoderContract;

/**
 * Class Latin1 ISO-8859-1 ASCII
 * @package Iphpjs\Encoder\Char
 */
class Latin1 implements EncoderContract{

    /**
     * Encode the given value.
     *
     * @param string $value
     * @param array $options
     * @return string
     */
    public function encode(string $value, array $options = []): string
    {
        return \utf8_decode($value);
    }

    /**
     * Decode the given encoded value.
     *
     * @param string $encodedValue
     * @param array $options
     * @return string
     */
    public function decode(string $encodedValue, array $options = []): string
    {
        return \utf8_encode($encodedValue);
    }
}
