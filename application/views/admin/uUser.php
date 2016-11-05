<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update User</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <?php echo form_open_multipart('con_admin/uUser'); ?>
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name ="us" value="<?php echo $isi['username']?>">
                  <input type="hidden" name="id" value="<?php echo $isi['id']?>">
                </div>   
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" name ="pw" value="<?php echo $isi['password']?>">
                </div> 
                <div class="form-group">
                  <label>Konfirmasi</label>
                  <input class="form-control" type="password" name ="kon" >
                </div> 
                <button type="submit" class="btn btn-xm btn-success " name="post">Ubah</button>
                <button type="Reset" class="btn btn-xm btn-warning " name="Reset">Reset</button>
             
            <form> 
             </div>
              <div class="col-lg-4">

              </div>
         </div>
      </div>
  </div>
                     

    </div>
</div>
