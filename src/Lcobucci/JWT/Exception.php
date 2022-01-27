<?php

namespace Tymon\JWTAuth\Lcobucci\JWT;

if (PHP_MAJOR_VERSION === 5) {
    interface Exception
    {
    }
} else {
    interface Exception extends \Throwable
    {
    }
}
