<?php

class Challenge
{
    const UPLOAD_DIRECTORY = './solutions/';
    private $file;
    private $whitelist;

    public function __construct($file)
    {
        $this->file      = $file;
        $this->whitelist = range( 1, 24 );
    }

    public function __destruct()
    {
        if (in_array( $this->file['name'], $this->whitelist )) {
            move_uploaded_file(
                $this->file['tmp_name'],
                self::UPLOAD_DIRECTORY . $this->file['name']
            );
        }
    }
}

//$challenge = new Challenge($_FILES['solution']);

$tmp       = '2easdf';
$whitelist = range( 1, 24 );
if (in_array( $tmp, $whitelist, true )) {
    var_dump( 123 );
} else {
    var_dump( 222 );
}

if ('1e' === 1) {
    $a = '1e1';
    settype($a,'int');
    var_dump( 123 ,$a);
} else {
    var_dump( 222 );
}

if (md5('s155964671a')==md5('QNKCDZO')){
    var_dump(md5('s155964671a'),md5('QNKCDZO'));
}else{
    var_dump(222);
}