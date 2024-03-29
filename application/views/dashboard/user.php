  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah User</h1>
      </div>

      
      <?php
      // arahkan form submit ke kontroller 'book/insert' 
      echo form_open_multipart('user/insert'); 
      ?>
          <div class="form-group row">
              <label for="uname" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="uname" placeholder="Masukkan Username">
              </div>
          </div>

          <div class="form-group row">
              <label for="pass" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="pass" placeholder="Masukkan Password">
              </div>
          </div>

          <div class="form-group row">
              <label for="full" class="col-sm-2 col-form-label">Full Name</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="full" placeholder="Masukkan Full Name ">
              </div>
          </div>

          <div class="form-group row">
              <label for="role" class="col-sm-2 col-form-label">Role</label>
              <div class="col-sm-10">
                  <select class="form-control" name="role">
    
                  <?php
                      // menampilkan combo box berisi kategori buku
                      foreach ($role as $role_item):
                  ?>
                      <option value="<?php echo $role_item['role']?>"><?php echo $role_item['role']?></option>
                  <?php
                      endforeach;
                  ?>
                  </select>
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mb-2">Submit Data User</button>      
              </div>
          </div>



          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar User</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Usename</th>
              <th>Nama Lengkap</th>
              <th>Password</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
                      // menampilkan combo box berisi kategori buku
                      foreach ($users as $u_item):
                  ?>
                      <td><?php echo $u_item['username']?></td>
                      <td><?php echo $u_item['fullname']?></td>
                      <td><?php echo $u_item['password']?></td>
                      <td><?php echo $u_item['role']?></td>
                      <td><?php echo anchor('user/edit/'.$u_item['username'], 'Edit'); ?> | <?php echo anchor('user/delete/'.$u_item['username'], 'Hapus'); ?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>

      </form>

    </main>
  