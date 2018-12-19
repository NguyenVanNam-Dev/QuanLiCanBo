<?php
include('../model/model_empl.php');

if (isset($_POST['tukhoa'])) {
 $key = $_POST['tukhoa'];
 $model_empl = new model_empl();
 $empl = $model_empl->seachempl($key);
 ?>
 Tìm thấy <?=count($empl).' kết quả cho <strong>'.$_POST['tukhoa'].'<strong>'?>
 <div>
   <?php foreach($empl as $row){ ?>
    <tr>
      <td><?=$row->empl_id?></td> 
      <td><?=$row->empl_name?></td> 
      <td><?=$row->empl_date?></td> 
      <td><?=$row->empl_gender?></td> 
      <td><?=$row->empl_adress?></td> 
      <td><?=$row->empl_job?></td>
    </tr>
  <?php }?>
</div>
<?php } ?>
