<?php
/**
 * 连接memcache 测试
 */

$mem = new Memcache; //创建Memcache对象
$ret = $mem->connect("127.0.0.1", 11111); //连接Memcache服务器

$val = "这是一个Memcache的测试.";
$key = md5($val);
$mem->set($key,  $val,  0,  120); //增加插入一条缓存，缓存时间为120s

if(($k = $mem->get($key))){ //判断是否获取到指定的key
    echo 'from cache:'.$k;
} else {
    echo 'normal'; //这里我们在实际使用中就需要替换成查询数据库并创建缓存.
}