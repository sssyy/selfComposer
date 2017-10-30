<?php
$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
$msg =(string) fopen("test.txt","r");
$len = filesize("test.txt");
socket_sendto($sock, $msg, $len, 0, '10.237.72.41', 11109);
socket_close($sock);
?>
