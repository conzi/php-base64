<?php

require_once('Base64.php');

$base64 = new Base64();

$test_string = 'test string';

//test1 , normal

$enc = $base64->encode($test_string);
print $enc == base64_encode($test_string);
echo "\n";

$dnc = $base64->decode($enc);

print $dnc == $test_string;
echo "\n";

//test2 , code with key

$key = '()!@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz+/';
$enc = $base64->encode($test_string, $key);
$dnc = $base64->decode($enc ,$key);

print $dnc == $test_string;
echo "\n";


