<?php

namespace Tymon\JWTAuth\Lcobucci\JWT\Validation;

use Tymon\JWTAuth\Lcobucci\JWT\Exception;
use RuntimeException;

final class ConstraintViolation extends RuntimeException implements Exception
{
}
