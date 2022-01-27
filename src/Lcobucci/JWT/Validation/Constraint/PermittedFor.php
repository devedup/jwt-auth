<?php

namespace Tymon\JWTAuth\Lcobucci\JWT\Validation\Constraint;

use Tymon\JWTAuth\Lcobucci\JWT\Token;
use Tymon\JWTAuth\Lcobucci\JWT\Validation\Constraint;
use Tymon\JWTAuth\Lcobucci\JWT\Validation\ConstraintViolation;

final class PermittedFor implements Constraint
{
    /** @var string  */
    private $audience;

    public function __construct($audience)
    {
        $this->audience = $audience;
    }

    public function assert(Token $token)
    {
        if (! $token->isPermittedFor($this->audience)) {
            throw new ConstraintViolation(
                'The token is not allowed to be used by this audience'
            );
        }
    }
}
