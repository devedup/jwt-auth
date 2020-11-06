<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tymon\JWTAuth\Claims;

use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class Expiration extends Claim
{
    use DatetimeTrait;

    /**
     * {@inheritdoc}
     */
    protected $name = 'exp';

    /**
     * {@inheritdoc}
     */
    public function validatePayload()
    {
//        \Log::debug("Checking the date");
//        \Log::debug("the value is {$this->getValue()}");
        $pastWithDaysAdded = $this->getValue() + 2592000; // 2592000 is 30 days in seconds
        if ($this->isPast($pastWithDaysAdded)) {
            throw new TokenExpiredException('Token has expired');
        } else {
//            \Log::debug("token ok");
        }
    }
}
