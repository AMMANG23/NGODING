<?php
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "armaninformatika21@gmail.com";    
    $to = "armanumar2302@gmail.com";    
    $subject = "Checking PHP mail";    
    $message = "Mari Kita Tes Apakah Bisa?";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>