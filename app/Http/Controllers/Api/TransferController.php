<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function call(Request $request)
    {
        $rand = rand(0,1);

        if($rand == 1) {
            return response()->json(null, 201);
        } else {
            return response()->json(null, 500);
        }
    }
}
