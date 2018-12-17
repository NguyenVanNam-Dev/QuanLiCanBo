<?php 
$worker = $data['worker'];
?>

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">danh sách công nhân</div>
      <div class="panel-body">
        <div class="col-md-4 col-md-offset-8">
          <div id="custom-search-input">
            <form action="index.php?controller=congnhan&act=seach_worker" method="post">
              <div class="input-group col-md-12">

                <input type="text" class="form-control input-lg" placeholder="nhập tên công nhân" name="seach_name_worker" required />
                <span class="input-group-btn">
                  <button class="btn btn-info btn-lg" type="submit" name="btn-submmit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </span>

              </div>
            </form>
          </div>
        </div>
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
        <tbody>
          <?php foreach($worker as $dataWorker){?>
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
<!-- Modal -->
<div class="modal fade" id="confirm_add_worker">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="index.php?controller=congnhan&act=do_add" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm công nhân</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
              <label>Họ tên</label>
              <input type="text" class="form-control" name="worker_name" required>
            </div>
            <div class="form-group">
              <label>Năm sinh</label>
              <input type="date" class="form-control" name="worker_date">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Giới tính</label>
              <select class="form-control" id="sel2" name="worker_gender">
                <option value="Nam">Nam</option>
                <option value="Nu">Nữ</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pwd">Địa chỉ</label>
              <input type="text" class="form-control" name="worker_adress" required>
            </div>
            <div class="form-group">
              <label for="pwd">Bậc</label>
              <select class="form-control" name="worker_level">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
  </div>
</div>
</div>
<!-- <script type="text/javascript">
  $('#btn_add_worker').click(function()
  {
    $('#confirm_add_worker').modal();
  });
</script> -->

