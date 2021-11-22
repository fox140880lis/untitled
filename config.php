<?php
$read = file('C:\Users\andra\Desktop\\names.txt');
$count = count($read);
$i = 1;
foreach ($read as $line){
    echo $line;
    if ($i<$count){
        echo ', ';
    }
    $i++;
}
?>

