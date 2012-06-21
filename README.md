php-base64
==========

php版本的base64，从[jquery-base64](https://github.com/carlo/jquery-base64)修改而来，主要为了支持自定义key


用法
====

正常使用,与base64_encode ,base64_decode没有区别

`
    $base64 = new Base64();
    $enc = $base64->encode('test string');
    $dec = $base64->decode($enc);
`

自定义key :

`
    $base64 = new Base64();
    $key = '()!@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz+/';

    $enc = $base64->encode('test string',$key);
    $dec = $base64->decode($enc,$key);
`

原理
====

[wikipedia:base64](http://zh.wikipedia.org/wiki/Base64)
[百度百科:base64](http://baike.baidu.com/view/1485202.htm)
