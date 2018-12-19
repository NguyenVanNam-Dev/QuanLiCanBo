<?php 
$worker = $data['worker'];
?>

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary" style="height: 400px;overflow: auto;">
      <div class="panel-heading">danh sách công nhân</div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-6">
          <div id="custom-search-input">
            <form >
              <div class="input-group col-md-12">

                <input type="text" class="form-control input-lg" placeholder="nhập tên công nhân" name="seach_name_eng" required id="txtSearch" />
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



<?php 
$empl = $data['empl'];
?>

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary" style="height: 400px;overflow: auto;">
      <div class="panel-heading">danh sách nhân viên</div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-6">
          <div id="custom-search-input">
            <form >
              <div class="input-group col-md-12">

                <input type="text" class="form-control input-lg" placeholder="nhập tên nhân viên" name="seach_name_eng" required id="txtSearch_empl" />
                <span class="input-group-btn">
                  <a class="btn btn-info btn-lg"  id="seach_empl" name="btn-submmit">
                    <i class="glyphicon glyphicon-search"></i>
                  </a>
                </span>

              </div>
            </form>
          </div>
        </div>
        <?php
        $stt = isset($_GET["stt"]) ? $_GET["stt"] : "";
        if ($stt == 'empl_add_success') {
         ?>
         <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Thêm nhân viên thành công</strong> 
        </div>
        <?php
      } 
      ?>   

      <?php

      $stt = isset($_GET["stt"])? $_GET["stt"] : "";
      if ($stt == 'add_sucess') { ?>

        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Thêm nhân viên thành công</strong> 
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
          <th>mã nhân viên</th>
          <th>Họ tên</th>
          <th>ngày sinh</th>
          <th>giới tính</th>
          <th>địa chỉ</th>
          <th>level</th>
        </tr>
      </thead>
      <tbody id="datasearch_empl">

        <?php foreach($empl as $dataempl)
        {?>
          <tr>
           <td><?=$dataempl->empl_id?></td> 
           <td><?=$dataempl->empl_name?></td> 
           <td><?=$dataempl->empl_date?></td> 
           <td><?=$dataempl->empl_gender?></td> 
           <td><?=$dataempl->empl_adress?></td> 
           <td><?=$dataempl->empl_job?></td> 
         </tr>
       <?php } ?>
     </tbody>
   </table> 
   <a class="btn btn-primary" id="btn_add_empl" href="add_empl.php">Thêm nhân viên</a>   
 </div>
</div>
</div>

</div>
<script>
  $(document).ready(function(){
    $('#seach_empl').click(function(){
      
      var keyword = $('#txtSearch_empl').val();
      $.post("view/view_seach_empl.php",{tukhoa:keyword},function(data){
        $('#datasearch_empl').html(data)
      })
    })
  });
</script>

<?php 
$eng = $data['eng'];
?>

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary" style="height: 400px;overflow: auto;">
      <div class="panel-heading">danh sách kỹ sư</div>
      <div class="panel-body">
        <div class="col-md-6 col-md-offset-6">
          <div id="custom-search-input">
            <form >
              <div class="input-group col-md-12">

                <input type="text" class="form-control input-lg" placeholder="nhập tên kỹ sư" name="seach_name_eng" required id="txtSearch_eng" />
                <span class="input-group-btn">
                  <a class="btn btn-info btn-lg"  id="seach_eng" name="btn-submmit">
                    <i class="glyphicon glyphicon-search"></i>
                  </a>
                </span>

              </div>
            </form>
          </div>
        </div>
        <?php
        $stt = isset($_GET["stt"]) ? $_GET["stt"] : "";
        if ($stt == 'eng_add_success') {
         ?>
         <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Thêm kỹ sư thành công</strong> 
        </div>
        <?php
      } 
      ?>   

      <?php

      $stt = isset($_GET["stt"])? $_GET["stt"] : "";
      if ($stt == 'add_sucess') { ?>

        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Thêm kỹ sư thành công</strong> 
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
          <th>mã kỹ sư</th>
          <th>Họ tên</th>
          <th>ngày sinh</th>
          <th>giới tính</th>
          <th>địa chỉ</th>
          <th>ngành đào tạo</th>
        </tr>
      </thead>
      <tbody id="datasearch_eng">

        <?php foreach($eng as $dataeng)
        {?>
          <tr>
           <td><?=$dataeng->eng_id?></td> 
           <td><?=$dataeng->eng_name?></td> 
           <td><?=$dataeng->eng_date?></td> 
           <td><?=$dataeng->eng_gender?></td> 
           <td><?=$dataeng->eng_adress?></td> 
           <td><?=$dataeng->eng_train?></td> 
         </tr>
       <?php } ?>
     </tbody>
   </table> 
   <a class="btn btn-primary" id="btn_add_eng" href="add_eng.php">Thêm kỹ sư</a>   
 </div>
</div>
</div>

</div>
<script>
  $(document).ready(function(){
    $('#seach_eng').click(function(){
      
      var keyword = $('#txtSearch_eng').val();
      $.post("view/view_seach_eng.php",{tukhoa:keyword},function(data){
        $('#datasearch_eng').html(data)
      })
    })
  });
</script>