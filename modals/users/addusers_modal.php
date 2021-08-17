
<!-- Modal -->
<form action="">
<div class="modal fade animate__animated animate__zoomin" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control email" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control username" id="username" placeholder="Username...">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control password" id="password" placeholder="Password...">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" name="name" class="form-control name" id="name" placeholder="Enter your name...">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Role</label>
          <select name="role" id="role" class="form-select role">
            <option selected>Select Role</option>
            <option value="administrator">Admin</option>
            <option value="user">User</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="addUser" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="addUser" class="btn btn-primary addUser">Add User</button>
      </div>
    </div>
  </div>
</div>
</form>