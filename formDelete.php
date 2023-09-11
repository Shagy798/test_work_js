
<?php
    if (isset($_POST)) {
        $finalId = $_POST['id'];
        $fd = fopen("txt.txt", 'a+') or die("не удалось открыть файл");

        if ($finalId != ""){
        $file=file("txt.txt");
        $fp=fopen("txt.txt","w");
        for($i=0;$i<sizeof($file);$i++){
        if($i==$finalId) 
        {unset($file[$i]);} }
        fputs($fp,implode("",$file));
        fclose($fp);}

    }
    
?>