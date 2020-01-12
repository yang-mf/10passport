<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table='user';

    public static function CurlPost($data,$url)
    {
        //初始化
        $ch=curl_init();
        //设置请求参数
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

        //开启会话，发送请求
        curl_exec($ch);

        //获取错误信息
        $error = curl_error($ch);

        if($error)
        {
            echo $error;
            die;
        }

        //结束会话，释放资源
        curl_close($ch);




    }


}
