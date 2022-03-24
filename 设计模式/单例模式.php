<?php

class Demo{
    // 1.静态私有属性，保存当前实例
    private static $instance = null;

    // 2.构造方法私有化，禁止从外部用new来创建实例
    private function __construct()
    {
    }

    // 3.克隆方法私有化，禁止克隆生成本类的实例
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    // 4.生成唯一实例
    public static function getInstacce()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$obj1 = Demo::getInstacce();
$obj2 = Demo::getInstacce();

var_dump($obj1, $obj2);
