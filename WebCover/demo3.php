<?php


//http://bug.com/WebCover/demo3.php?a=a=12
$arr = ['a'=>'1'];
@parse_str($_GET['a'],$arr);

var_dump($arr);


//http://bug.com/WebCover/demo3.php?a=yml=asdfa
$yml = "cool";
echo "out0:" . $yml;
echo "<br>";
$a = $_GET['a'];
@parse_str( $a );
echo "out1:" . $yml;





//http://bug.com/WebCover/demo3.php?b=a[0]=s155964671a
$flag = 'is you flag';
$a = "www.XMAN.com";
$b = $_GET['b'];
@parse_str( $b );
if ($a[0] != 'QNKCDZO' && md5( $a[0] ) == md5( 'QNKCDZO' )) {
    echo $flag;
} else {
    exit( '你的答案不对0.0' );
}
