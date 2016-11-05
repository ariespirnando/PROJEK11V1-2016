<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <?php echo form_open_multipart('con_admin/tuser'); ?>
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name ="us">
                </div>   
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" name ="pw">
                </div> 
                <div class="form-group">
                  <label>Konfirmasi</label>
                  <input class="form-control" type="password" name ="kon">
                </div> 
                <button type="submit" class="btn btn-xm btn-success " name="post">Simpan</button>
                <button type="Reset" class="btn btn-xm btn-warning " name="Reset">Reset</button>
             
            <form>
                <a href="<?php echo base_url()?>index.php/con_admin/user" class="btn btn-xm btn-warning ">Kembali</a>   
             </div>
              <div class="col-lg-4">

              </div>
         </div>
      </div>
  </div>
                     

    </div>
</div>
