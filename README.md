php-base64
==========

php版本的base64，从[jquery-base64](https://github.com/carlo/jquery-base64)修改而来，主要为了支持自定义key


用法
====

正常使用,与base64_encode ,base64_decode没有区别


    $base64 = new Base64();
    $enc = $base64->encode('test string');
    $dec = $base64->decode($enc);


自定义key :


    $base64 = new Base64();
    $key = '()!@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz+/';
    $enc = $base64->encode('test string',$key);
    $dec = $base64->decode($enc,$key);


原理
====

[wikipedia:base64](http://zh.wikipedia.org/wiki/Base64)

> 完整的base64定义可见 RFC 1421和 RFC 2045。编码后的数据比原始数据略长，为原来的4/3。
> 在电子邮件中，根据RFC 822规定，每76个字符，还需要加上一个回车换行。可以估算编码后数据长度大约为原长的135.1%。
> 转换的时候，将三个byte的数据，先后放入一个24bit的缓冲区中，先来的byte占高位。数据不足3byte的话，于缓冲区中剩下的bit用0补足。然后，每次取出6（因为）个bit，按照其值选择ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/中的字符作为编码后的输出。不断进行，直到全部输入数据转换完成。
如果最后剩下两个输入数据，在编码结果后加1个“=”；如果最后剩下一个输入数据，编码结果后加2个“=”；如果没有剩下任何数据，就什么都不要加，这样才可以保证资料还原的正确性。


[百度百科:base64](http://baike.baidu.com/view/1485202.htm)
