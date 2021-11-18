<!-- Add Product -->
<div class="modal fade" id="addProd">
  <div class="modal-dialog" style="max-width: 550px">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dedModalLabel">Register new Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/actions.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Book Title</label>
            <input type="text" class="form-control" name="b-title">
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="">Book Price</label>
              <input type="text" class="form-control" name="b-price">
            </div>
            <div class="col-md-6">
              <label for="">Book Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="b-file" name="b-image">
                <label class="custom-file-label" for="b-file">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="">Book Descriptions</label>
            <textarea name="b-descr" class="form-control"></textarea>
          </div>
	    </div>
	    <div class="modal-footer">
	     	<button class="btn btn-success" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary" id="prodBtn" name="save-prod">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Add User -->
<div class="modal fade" id="regUser">
  <div class="modal-dialog" style="max-width: 550px">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h5 class="modal-title">Register new User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4">
        <form action="includes/auth.php" method="POST">
          <div class="form-group row">
            <div class="col-md-6">
              <label for="">First Name</label>
              <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="col-md-6">
              <label for="">Last Name</label>
              <input type="text" class="form-control" name="lname" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="">Username</label>
              <input type="text" class="form-control" name="user" required>
            </div>
            <div class="col-md-6">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="">Role</label>
              <select class="custom-select" name="role" required>
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="">Password</label>
              <input type="password" class="form-control" name="pass" required>
            </div>
          </div>
      </div>
      <div class="modal-footer p-4">
        <button class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
        <button type="submit" class="btn btn-primary" name="regBtn"><i class="fa fa-check-circle"></i> Register</button>
      </form>
      </div>
    </div>
  </div>
</div>