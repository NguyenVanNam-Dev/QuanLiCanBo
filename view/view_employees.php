<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">danh sách nhân viên</div>
      <div class="panel-body">
        <?php

        $stt = isset($_GET["stt"])? $_GET["stt"] : "";
        if ($stt == 'add_empl_sucess') { ?>

          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thêm nhân viên thành công</strong> 
          </div>
        <?php }else if ($stt == "add_empl_fail") {

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
            <th>công việc</th>
          </tr>
        </thead>
        <tbody>

          <?php
          foreach ($arr_nhanvien as $rows) {
            ?>
            <tr>
              <td><?php echo $rows->empl_id; ?></td>
              <td><?php echo $rows->empl_name; ?></td>
              <td><?php echo $rows->empl_date; ?></td>
              <td><?php echo $rows->empl_gender; ?></td>
              <td><?php echo $rows->empl_adress; ?></td>
              <td><?php echo $rows->empl_job; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <button type="button" class="btn btn-primary" id="btn_add_empl">Thêm nhân viên</button>    
    </div>
  </div>
</div>


</div>
<div class="modal fade" id="confirm_add_empl">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="index.php?controller=employees&act=do_add_empl" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm nhân viên</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
              <label>Họ tên</label>
              <input type="text" class="form-control" name="empl_name" required>
            </div>
            <div class="form-group">
              <label>Năm sinh</label>
              <input type="date" class="form-control" name="empl_date">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Giới tính</label>
              <select class="form-control" id="sel2" name="empl_gender">
                <option value="Nam">Nam</option>
                <option value="Nu">Nữ</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pwd">Địa chỉ</label>
              <input type="text" class="form-control" name="empl_adress" required>
            </div>
            <div class="form-group">
              <label for="pwd">công việc</label>
              <input type="text" name="empl_job" class="form-control">
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
<script type="text/javascript">
  $('#btn_add_empl').click(function()
  {
    $('#confirm_add_empl').modal();
  });
</script>
