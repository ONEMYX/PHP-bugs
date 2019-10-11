<?php

//url=javascript://comment%250aalert(1);sec-redclub.com

//$url = filter_var( $_GET['url'], FILTER_VALIDATE_URL );
//var_dump( $url );
//$url = htmlspecialchars( $url );
//var_dump( $url );
//echo "<a href ='$url' >Next slide>></a>";


$url = $_GET['url'];
var_dump($url);
if (isset( $url ) && filter_var( $url, FILTER_VALIDATE_URL )) {
    $site_info = parse_url( $url );
    var_dump( $site_info );
    if (preg_match( '/baidu.com$/', $site_info['host'] )) {
        exec( 'curl "' . $site_info['host'] . '"', $result );
        echo "<center><h1>You have curl {$site_info['host']} successfully!</h1></center>
              <center><textarea rows='20' cols='90'>";
        echo implode( ' ', $result );
    } else {
        die( "<center><h1>Error: Host not allowed</h1></center>" );
    }
} else {
    echo "<center><h1>Just curl sec-redclub.com!</h1></center><br>
          <center><h3>For example:?url=http://sec-redclub.com</h3></center>";
}
