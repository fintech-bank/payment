<?php

namespace App\Http\Controllers;

use App\Service\Generator;
use App\Service\Verify;

class TestController extends Controller
{
    public function __invoke()
    {
        $verify = new Generator();
        dd($verify->icsNNE('61', 'ZER', 'FR'));
    }
}
