

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">danh sách công nhân</div>
      <div class="panel-body">
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
            <?php
            foreach ($arr as $rows) {
              ?>
              <tr>
                <td><?php echo $rows->worker_id; ?></td>
                <td><?php echo $rows->worker_name; ?></td>
                <td><?php echo $rows->worker_date; ?></td>
                <td><?php echo $rows->worker_gender; ?></td>
                <td><?php echo $rows->worker_adress; ?></td>
                <td><?php echo $rows->worker_level; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table> 
          <button type="button" class="btn btn-primary">thêm công nhân</button>       
      </div>
    </div>
  </div>
</div>