<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">danh sách kỹ sư</div>
      <div class="panel-body">
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
          <button type="button" class="btn btn-primary">Primary</button>
      </div>
    </div>
  </div>


</div>