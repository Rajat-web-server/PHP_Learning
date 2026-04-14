<?php

    $file=fopen("C:\Users\Rajat\OneDrive\Programming files\something.txt","a",);

    // $read=fread($file,filesize("C:\Users\Rajat\OneDrive\Programming files\something.txt"));

    $write=fwrite($file," New message\n");

    echo $write;
    fclose($file);
?>