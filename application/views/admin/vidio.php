<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Vidio</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <?php echo form_open_multipart('con_admin/vidio'); ?>
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Judul video</label>
                  <input class="form-control" type="text" name ="jGambar">
                </div>      
                <div class="form-group">
                  <label>Jenis Video</label>
                  <select class="form-control" name="jenis">
                      <option value=""></option>
                      <option value="gHome">Testimoni</option>
                      <option value="gGaleri">Bisnis</option>
                      <option value="gAward">Media</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Upload Vidio</label>
                  <input class="form-control" type="file" name ="upload">
                </div>
                <font color="#FF0000"><span>* Ket Ukuran gambar  max 500 mb</span></font><br><br>
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
