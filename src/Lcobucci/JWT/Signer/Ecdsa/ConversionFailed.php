<?php

namespace Tymon\JWTAuth\Lcobucci\JWT\Signer\Ecdsa;

use InvalidArgumentException;
use Tymon\JWTAuth\Lcobucci\JWT\Exception;

final class ConversionFailed extends InvalidArgumentException implements Exception
{
    /** @return self */
    public static function invalidLength()
    {
        return new self('Invalid signature length.');
    }

    /** @return self */
    public static function incorrectStartSequence()
    {
        return new self('Invalid data. Should start with a sequence.');
    }

    /** @return self */
    public static function integerExpected()
    {
        return new self('Invalid data. Should contain an integer.');
    }
}
