<?php


/*
 * php 弱类型比较bug 出现的原因 是因为 PHP 与数字比较的时候会把它转化为数字
 * 当php 在与数字 对比时，会检测是否时科学计数法 如果是就自动转为十进制。
 * */


function one()
{
    $string = '2.php';
//    $string = 0;
//    $string = -1;
    $string = 'aaa';
    $string = '0e123';
//    $string = '1a48';
//    $string = '7b';
    var_dump( (int)$string );
    switch ($string) {
        case '0':
            return 0;
            break;
        case '1':
            return 1;
            break;
        case 2:
            return 2;
            break;
        case '2.php':
            return 'ok';
            break;
        case 123:
            return '123';
            break;
        default :
            return 'zee';
            break;
    }
}

if ('aaa' == 0) {
    echo 'str';
}
if ('a' == '-a') {
    echo '-a';
}

// case 如果为 数字会转化为数字 但是如果两个都是字符
$a = one();
var_dump( $a );
echo '<hr>';

function Hex2String($hex)
{

    $string = '';

    for ($i = 0; $i < strlen( $hex ) - 1; $i += 2) {

        $string .= chr( hexdec( $hex[$i] . $hex[$i + 1] ) );

    }

    return $string;

}

function two()
{
    $str = 'aaa';
    $str = '0e1';//科学
//    $str = '01';//数字
//    $str = '0x39393939393939393939393920756e696f6e20616c6c202873656c656374202748656c6c6f21212729';//十六进制 1 and 1=1
//    var_dump( dechex( '1535' ) );
//    $str = '5ff';
    if (is_numeric( $str )) {
        echo 'number' . '<br>';
    }
    if (ctype_digit( $str )) {
        echo 'ok';
    }

}

function three()
{
    $flag = 'aaa';
    $a    = [1, 2];
    //出现一个警告
    var_dump( strcmp( $flag, $a ) );
}

function four()
{
    if (md5( 's155964671a' ) == md5( 'QNKCDZO' )) {
        var_dump( md5( 's155964671a' ), md5( 'QNKCDZO' ) );
    } else {
        var_dump( 222 );
    }
}

function fives()
{
    $tmp       = '2e1';
    $tmp       = '2ea';
    $whitelist = range( 1, 24 );
    if (in_array( $tmp, $whitelist )) {
        var_dump( 123 );
    } else {
        var_dump( 222 );
    }
    if (in_array( $tmp, $whitelist, true )) {
        var_dump( 123 );
    } else {
        var_dump( 222 );
    }
}

two();
echo '<hr>';
three();
echo '<hr>';
four();
echo '<hr>';
fives();