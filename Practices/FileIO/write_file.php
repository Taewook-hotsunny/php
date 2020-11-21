<?php

$file = "example.txt";

if($handle = fopen($file, 'w')) {

    fwrite($handle, "Hellllooooo");

} else {
    echo "File does not exists";
}




fclose($handle);

