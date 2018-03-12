<?php
/**
 * uuid 生成器
 */
define('PATH', '/home/joshua/key');
function create_guid(){
    $microTime = microtime();
    list($a_dec, $a_sec) = explode(" ", $microTime);
    $dec_hex = dechex($a_dec* 1000000);
    $sec_hex = dechex($a_sec);
    ensure_length($dec_hex, 5);
    ensure_length($sec_hex, 6);
    $guid = "";
    $guid .= $dec_hex;
    $guid .= create_guid_section(3);
    $guid .= '-';
    $guid .= create_guid_section(4);
    $guid .= '-';
    $guid .= create_guid_section(4);
    $guid .= '-';
    $guid .= create_guid_section(4);
    $guid .= '-';
    $guid .= $sec_hex;
    $guid .= create_guid_section(6);
    return $guid;
}

/**
 * @param $string
 * @param $length
 */
function ensure_length(&$string, $length){

    $strlen = strlen($string);
    if($strlen < $length)
    {
        $string = str_pad($string,$length,"0");
    }
    else if($strlen > $length)
    {
        $string = substr($string, 0, $length);
    }
}

function create_guid_section($characters){
    $return = "";
    for($i=0; $i<$characters; $i++)
    {
        $return .= dechex(mt_rand(0,15));
    }
    return $return;
}

function write2file()
{
    $keyFile = fopen(PATH,'w') or die('Unable to open file!');

    $key = date('Y-m-d H:i:s') . strtoupper(create_guid());
    fwrite($keyFile, $key);
    fclose($keyFile);
}

