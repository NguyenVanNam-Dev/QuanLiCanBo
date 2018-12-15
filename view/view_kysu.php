<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">danh sách kỹ sư</div>
      <div class="panel-body">
        <div class="col-md-4 col-md-offset-8">
          <div id="custom-search-input">
            <form action="index.php?controller=kysu&act=seach_eng" method="post">
              <div class="input-group col-md-12">

                <input type="text" class="form-control input-lg" placeholder="nhập tên nhân viên" name="seach_name_eng" required />
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
        if ($stt == 'add_eng_sucess') { ?>

          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thêm kỹ sư thành công</strong> 
          </div>
        <?php }else if ($stt == "add_eng_fail") {

         ?>
         <div class="alert alert-warning alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Lỗi rồi!</strong> vui lòng thử lại.
        </div>
      <?php }

        ?>
       

      
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Mã kỹ sư</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Ngành đào tạo</th>
          </tr>
        </thead>
        <tbody>

          <?php
          foreach ($arr_kysu as $rows) {
            ?>
            <tr>
              <td><?php echo $rows->egn_id; ?></td>
              <td><?php echo $rows->eng_name; ?></td>
              <td><?php echo $rows->eng_date; ?></td>
              <td><?php echo $rows->eng_gender; ?></td>
              <td><?php echo $rows->eng_adress; ?></td>
              <td><?php echo $rows->eng_train; ?></td>
            </tr>
          <?php } ?>
        </tbody>

      </table>    
      <a class="btn btn-primary" id="btn_add_eng">Thêm kỹ sư</a>
    </div>
  </div>
</div>


</div>
<div class="modal fade" id="confirm_add_eng">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="index.php?controller=kysu&act=do_add_eng" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm kỹ sư</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
              <label>Họ tên</label>
              <input type="text" class="form-control" name="eng_name" required>
            </div>
            <div class="form-group">
              <label>Năm sinh</label>
              <input type="date" class="form-control" name="eng_date">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Giới tính</label>
              <select class="form-control" id="sel2" name="eng_gender">
                <option value="Nam">Nam</option>
                <option value="Nu">Nữ</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pwd">Địa chỉ</label>
              <input type="text" class="form-control" name="eng_adress" required>
            </div>
            <div class="form-group">
              <label for="pwd">Ngành đào tạo</label>
              <input type="text" name="eng_train" class="form-control">
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
  $('#btn_add_eng').click(function()
  {
    $('#confirm_add_eng').modal();
  });
</script>

