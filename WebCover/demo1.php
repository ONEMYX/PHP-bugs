<?php


//include "flag.php";
// CIT 列题
$_403 = "Access Denied";

$_200 = "Welcome Admin";
$flag = 'I am flag';
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die( "BugsBunnyCTF is here :p…" );
}
if (!isset( $_POST["flag"] )) {
    die( $_403 );
}
foreach ($_GET as $key => $value) {
    $$key = $$value;
}
foreach ($_POST as $key => $value) {
    $$key = $value;
}
if ($_POST["flag"] !== $flag) {
    die( $_403 );
}
echo "This is your flag : " . $flag . "\n";
die( $_200 );

exit();


$a = 10;
var_dump( $a );
var_dump( $_GET );
// 循环 拿出 数据时 导致 变量被 覆盖
foreach ($_GET as $k => $v) {
    $$k = $v;
    echo $a;
}
// https://cloud.tencent.com/developer/article/1515390
$flag = 'flag';
foreach ($_POST as $key => $value) {
    $a     = $value;
    $$$key = $value;
    $ccut  = $flag;
    $yml   = $_GET["flag"];
    if ($yml == "iwantflag") {
        if ($ccut == "flag") {
            echo 'flag';
        } else {
            echo "you will get it";
        }
    } else {
        echo "nonono";
    }
}

