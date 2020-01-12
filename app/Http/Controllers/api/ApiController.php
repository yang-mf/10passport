<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\User;

//客户端
class ApiController extends Controller
{
    public function reg()
    {
        $data=[
            'name'      =>'abc',
            'pwd1'      =>'123456',
            'pwd2'      =>'123456',
            'email'     =>'aa@qq.com',
            'tel'       =>'13324567890',
            'token'     =>rand(1111,9999),
        ];

        $url='http://10passport.1905.com/ap/reg';

        $response=User::CurlPost($data,$url);

        echo $response;



    }
}
