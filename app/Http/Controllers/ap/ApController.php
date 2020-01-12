<?php

namespace App\Http\Controllers\ap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//服务端
class ApController extends Controller
{
    public function reg(Request $request)
    {
        $data=$_POST;
        print_r($data);
    }
}
