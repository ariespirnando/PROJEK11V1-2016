<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dialog Service</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <div class="alert alert-warning">
            <a>Nama Pelanggan</a>,<h3><?php echo $isi['NamaPelanggan'];?></h3><br>
            <a>Keluhan</a>,<br><br><p><?php echo $isi['keluahan'];?></p>

            <br><br>
            <?php echo form_open('con_admin/dialog') ?>
              <div class="form-group">
                  <label>Isi Tanggapan</label>
                  <input type="hidden" name="pro" value="<?php echo $isi['idService'];?>">
                  <textarea rows="3" class="form-control" name="komentar"></textarea>
                </div> 
                 <div class="form-group">
                 <button type="submit" name="post" class="btn btn-success">Tanggapi</button>
                 <a href="<?php echo base_url();?>index.php/con_admin/service" class="btn btn-success">Kembali</a>
                </div> 
            </div>
            </form>

              </div>
         </div>
      </div>
  </div>
                     

    </div>
</div>
