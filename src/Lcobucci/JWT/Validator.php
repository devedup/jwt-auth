<?php

namespace Tymon\JWTAuth\Lcobucci\JWT;

use Tymon\JWTAuth\Lcobucci\JWT\Validation\Constraint;
use Tymon\JWTAuth\Lcobucci\JWT\Validation\NoConstraintsGiven;
use Tymon\JWTAuth\Lcobucci\JWT\Validation\RequiredConstraintsViolated;

interface Validator
{
    /**
     * @throws RequiredConstraintsViolated
     * @throws NoConstraintsGiven
     */
    public function assert(Token $token, Constraint ...$constraints);

    /**
     * @return bool
     *
     * @throws NoConstraintsGiven
     */
    public function validate(Token $token, Constraint ...$constraints);
}
