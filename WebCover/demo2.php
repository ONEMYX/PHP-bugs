<?php

// yml =aaaaaaa
$yml = 10;
echo 'out0:' . $yml;
extract( $_POST );
echo '<br>';
echo "out1:" . $yml;
echo '<br>';


$yml = 10;
echo 'out0:' . $yml;
extract( $_POST, EXTR_SKIP );
echo '<br>';
echo "out1:" . $yml;

/*
out0:10
out1:aaaaaaa
out0:10
out1:10
*/
// data:{"username":"admin","password":"123","users":{"admin":"123"}}
$flag = 'flag';
$user = null;
if (!empty( $_POST['data'] )) {
    try {
        $data = json_decode( $_POST['data'], true );
    } catch (Exception $e) {
        $data = [];
    }
    extract( $data );
    if ($users[$username] && strcmp( $users[$username], $password ) == 0) {
        $user = $username;
    }
}


var_dump( $user, ($users) );

if ($user == 'admin') printf( "<code>%s</code>", htmlentities( $flag ) );

// http://bug.com/WebCover/demo2.php?money=200&shop_money=0
$money      = 100;
$shop_money = 60;
var_dump( $_GET );
extract( $_GET );
if ($money > $shop_money) {
    echo 'shop';
} else {
    echo 'no';
}