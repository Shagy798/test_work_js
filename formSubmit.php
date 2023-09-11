<?php
    if (isset($_POST)) {
        $proizv = $_POST['proizv'];
        $naimen = $_POST['naimen'];
        $price = $_POST['price'];
        $count = $_POST['count'];
        
$fd = fopen("txt.txt", 'a+') or die("не удалось открыть файл");
fputs($fd, $proizv."::".$naimen."::".$price."::".$count."\r\n");
fclose($fd);
    }

?>


