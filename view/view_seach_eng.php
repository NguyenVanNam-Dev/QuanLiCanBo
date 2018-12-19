<?php
include('../model/model_eng.php');

if (isset($_POST['tukhoa'])) {
 $key = $_POST['tukhoa'];
 $model_eng = new model_eng();
 $eng = $model_eng->seacheng($key);
 ?>
 Tìm thấy <?=count($eng).' kết quả cho <strong>'.$_POST['tukhoa'].'<strong>'?>
 <div>
   <?php foreach($eng as $row){ ?>
    <tr>
      <td><?=$row->eng_id?></td> 
      <td><?=$row->eng_name?></td> 
      <td><?=$row->eng_date?></td> 
      <td><?=$row->eng_gender?></td> 
      <td><?=$row->eng_adress?></td> 
      <td><?=$row->eng_train?></td>
    </tr>
  <?php }?>
</div>
<?php } ?>
