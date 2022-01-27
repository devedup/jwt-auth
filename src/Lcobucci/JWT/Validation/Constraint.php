<?php

namespace Tymon\JWTAuth\Lcobucci\JWT\Validation;

use Tymon\JWTAuth\Lcobucci\JWT\Token;

interface Constraint
{
    /** @throws ConstraintViolation */
    public function assert(Token $token);
}
