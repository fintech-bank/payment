<?php

namespace App\Http\Controllers;

use App\Service\Generator;
use App\Service\Verify;

class TestController extends Controller
{
    public function __invoke()
    {
        $verify = new Verify();
        return $verify->verifyICS('CH38HMR810338');
    }
}
