<?php 
$worker = $data['worker'];
?>

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">danh sách công nhân</div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-6">
          <div id="custom-search-input">
            <form >
              <div class="input-group col-md-12">

                <input type="text" class="form-control input-lg" placeholder="nhập tên nhân viên" name="seach_name_eng" required id="txtSearch" />
                <span class="input-group-btn">
                  <a class="btn btn-info btn-lg"  id="seach" name="btn-submmit">
                    <i class="glyphicon glyphicon-search"></i>
                  </a>
                </span>

              </div>
            </form>
          </div>
        </div>
        <?php
        $stt = isset($_GET["stt"]) ? $_GET["stt"] : "";
        if ($stt == 'worker_add_success') {
         ?>
         <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Thêm công nhân thành công</strong> 
        </div>
        <?php
      } 
      ?>
<!--       <div class="col-md-4 col-md-offset-8">
        <div id="custom-search-input">
          <form action="index.php?controller=congnhan&act=seach_worker" method="post">
            <div class="input-group col-md-12">
              <span class="input-group-btn">
                <a href="seach_worker.php" class="btn btn-primary">seach</a>
              </span>
            </div>
          </form>
        </div>
      </div>
    -->      

    <?php

    $stt = isset($_GET["stt"])? $_GET["stt"] : "";
    if ($stt == 'add_sucess') { ?>

      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Thêm công nhân thành công</strong> 
      </div>
    <?php }else if ($stt == "add_fail") {

     ?>
     <div class="alert alert-warning alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Lỗi rồi!</strong> vui lòng thử lại.
    </div>
  <?php } ?>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>mã công nhân</th>
        <th>Họ tên</th>
        <th>ngày sinh</th>
        <th>giới tính</th>
        <th>địa chỉ</th>
        <th>level</th>
      </tr>
    </thead>
    <tbody id="datasearch">

      <?php foreach($worker as $dataWorker)
      {?>
        <tr>
         <td><?=$dataWorker->worker_id?></td> 
         <td><?=$dataWorker->worker_name?></td> 
         <td><?=$dataWorker->worker_date?></td> 
         <td><?=$dataWorker->worker_gender?></td> 
         <td><?=$dataWorker->worker_adress?></td> 
         <td><?=$dataWorker->worker_level?></td> 
       </tr>
     <?php } ?>
   </tbody>
 </table> 
 <a class="btn btn-primary" id="btn_add_worker" href="add_worker.php">Thêm công nhân</a>   
</div>
</div>
</div>

</div>
<script>
  $(document).ready(function(){
    $('#seach').click(function(){
    
      var keyword = $('#txtSearch').val();
      $.post("view/view_seach_worker.php",{tukhoa:keyword},function(data){
        $('#datasearch').html(data)
      })
    })
  });
</script>