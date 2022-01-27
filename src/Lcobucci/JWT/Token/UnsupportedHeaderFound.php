<?php

namespace Tymon\JWTAuth\Lcobucci\JWT\Token;

use InvalidArgumentException;
use Tymon\JWTAuth\Lcobucci\JWT\Exception;

final class UnsupportedHeaderFound extends InvalidArgumentException implements Exception
{
    /** @return self */
    public static function encryption()
    {
        return new self('Encryption is not supported yet');
    }
}
