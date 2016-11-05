<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Picture</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <?php echo form_open_multipart('con_admin'); ?>
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Nama Gambar</label>
                  <input class="form-control" type="text" name ="jGambar">
                </div>      
                <div class="form-group">
                  <label>Jenis Gambar</label>
                  <select class="form-control" name="jenis">
                      <option value=""></option>
                      <option value="gHome">untuk Home</option>
                      <option value="gGaleri">untuk Galeri</option>
                      <option value="gAward">untuk Award</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="Keterangan"></textarea>
                </div>
                <div class="form-group">
                  <label>Upload Gambar</label>
                  <input class="form-control" type="file" name ="upload">
                </div>
                <font color="#FF0000"><span>* Ket Ukuran gambar  max 1700 x 730 pixels</span></font><br><br>
                <button type="submit" class="btn btn-xm btn-success " name="submit">Simpan</button>
                <button type="Reset" class="btn btn-xm btn-warning " name="Reset">Reset</button>
             
            <form>
                <a href="<?php echo base_url()?>index.php/con_admin/tampilPicture" class="btn btn-xm btn-warning ">Tampil Seluruh</a>   
             </div>
              <div class="col-lg-4">

              </div>
         </div>
      </div>
	</div>
                     

    </div>
</div>
