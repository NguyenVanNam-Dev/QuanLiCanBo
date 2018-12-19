    <!-- Modal content-->
    <div class="modal-content container">
      <form method="post">
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
              <input type="text" class="form-control" name="eng_train" required>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="btn_add_eng">Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" name="">Close</button>
      </div>
    </form>
  </div>