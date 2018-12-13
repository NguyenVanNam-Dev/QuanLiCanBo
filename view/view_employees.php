<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">danh sách nhân viên</div>
      <div class="panel-body">
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
        </table>    </div>
      </div>
    </div>


  </div>