<!DOCTYPE html>
<style>@import url(css/style.css);</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
    <div class="form">
        <form action+="" method="post" id="form">
            <label for="">Производитель:</label>
            <input id="proizv" type="text" name="proizv">
             
            <label for="">Наименоваие:</label>
            <input id="naimen" type="text" name="naimen">            
            
            <label for="">Цена:</label>
            <input id="price" type="int" name="price" min="0">
            
            <label for="">Количество:</label>
            <input id="count" type="int" name="count" min="0">
            
            <input type="submit" value="Отправить" name="send">
        </form>
        </div>
<?php    
    $file_name = "txt.txt";
    $data = file( $file_name );
    $sumPrice = 0;
    $sumCount = 0;
?>

<table border="1" class="table_sort">
<thead>
    <tr>
        <th>Id</th>
        <th>Производитель</th>
        <th>Наименоваие</th>
        <th>Цена</th>
        <th>Количество</th>
    </tr>
</thead>

<?php
    foreach( $data as $id=> $value):
     $value = explode( "::", $value );
        $sumPrice=$sumPrice+$value[2];
        $sumCount=$sumCount+$value[3];
       
?>
<tr title="<?=$value[0]?> <?=$value[1]?> <?=$value[2]?> <?=$value[3]?>"> 

  

        <td><?=$id?></td>
        <td><?=$value[0]?></td>
        <td><?=$value[1]?></td>
        <td><?=$value[2]?></td>
        <td><?=$value[3]?></td>

    </tr>
<?php
    endforeach;
?>
<tbody>
  
</tbody>

 <tfoot>
    <tr>
        <td>Итого:</td> 
        <td></td>
        <td></td>
        <td><?=$sumPrice?></td>
        <td><?=$sumCount?></td>
    </tr>
</tfoot>
        </table>
    </body>
    <script src="js/submit.js"></script>
    <script src="js/delete.js"></script>
    <script src="js/sorting.js"></script>

    
</html>