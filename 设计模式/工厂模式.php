<?php

/**
 * 简单工厂模式
 *
 * 定义一个用于创建对象的接口，让子类决定实例化哪一个类。工厂方法使一个类的实例化延迟到其子类
 *
 * Class Operation
 */

interface BaseSMS
{
    public static function sendCode($phone, $code);
}

class AliSMS implements BaseSMS
{
    public static function sendCode($phone, $code){
        return '阿里云短信验证码发送成功';
    }
}

class BaiduSMS implements BaseSMS
{
    public static function sendCode($phone, $code){
        return '百度云短信验证码发送成功';
    }
}

class TencentSMS implements BaseSMS
{
    public static function sendCode($phone, $code){
        return '腾讯云短信验证码发送成功';
    }
}

class SmsBusiness
{
    public static function sendCode($phone, $len = 4, $type){
        // 生成短信验证码
        $code = mt_rand(1000,9999); // 默认为4位数验证码
        if ($len == 6){ // 长度为6，则生成6位数验证码
            $code = mt_rand(100000,999999);
        }

        // 工厂模式创建不同的短信服务商
        $smsObj = null;
        switch($type){
            case 'ali':
                $smsObj = new AliSMS();
                break;
            case 'baidu':
                $smsObj = new BaiduSMS();
                break;
            case 'tencent':
                $smsObj = new TencentSMS();
                break;
        }

        $sms = $smsObj::sendCode($phone, $code);
        return $sms;
    }
}

class SMSController {
    public function code (){
        // 调用业务逻辑层的sendCode
        if ($sms = SmsBusiness::sendCode('123', 4, 'ali')){
            return $sms;
        }
        return '验证码发送失败';
    }
}

$SMSController = new SMSController();
var_dump($SMSController->code());
