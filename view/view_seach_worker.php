<?php
include('../model/model_worker.php');

if (isset($_POST['tukhoa'])) {
 $key = $_POST['tukhoa'];
 $model_worker = new model_worker();
 $worker = $model_worker->seachWorker($key);
 ?>
 Tìm thấy <?=count($worker).' kết quả cho <strong>'.$_POST['tukhoa'].'<strong>'?>
 <div>
   <?php foreach($worker as $row){ ?>
    <tr>
      <td><?=$row->worker_id?></td> 
      <td><?=$row->worker_name?></td> 
      <td><?=$row->worker_date?></td> 
      <td><?=$row->worker_gender?></td> 
      <td><?=$row->worker_adress?></td> 
      <td><?=$row->worker_level?></td>
    </tr>
  <?php }?>
</div>
<?php } ?>
