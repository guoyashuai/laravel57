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
        /*echo "time(): ".time().'<br>';
        echo (time() - session()->get('lasttime')).'<br>';
        echo "lasttime():".session()->get('lasttime').'<br>';
        if ((time() - session()->get('lasttime')) > 15 && !empty(session()->get('lasttime'))) {
            echo '现在过期';
            session([
                'lasttime' => time(),
            ]);
        }*/
        if ($this->isPast($this->getValue())) {
            throw new TokenExpiredException('Token has expired');
        }
    }
}
