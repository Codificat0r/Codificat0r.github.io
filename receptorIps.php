<?php
  $linea = $_POST["ip"]."\r\n";
  
  file_put_contents("ips.txt", $linea, FILE_APPEND);
?>
