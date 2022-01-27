<?php

namespace Tymon\JWTAuth\Lcobucci\JWT\Validation\Constraint;

use InvalidArgumentException;
use Tymon\JWTAuth\Lcobucci\JWT\Exception;

final class LeewayCannotBeNegative extends InvalidArgumentException implements Exception
{
    /** @return self */
    public static function create()
    {
        return new self('Leeway cannot be negative');
    }
}
