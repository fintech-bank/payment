<?php

namespace App\Http\Controllers;

use App\Service\Generator;
use App\Service\Verify;

class TestController extends Controller
{
    public function __invoke()
    {
        $verify = new Verify();
        $gen = new Generator();
        dd($verify->verifyICS('BL21FNV614212'), $gen->generateICS());
    }
}
