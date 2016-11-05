<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Clipping</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <?php echo form_open_multipart('con_admin/cliping'); ?>
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Judul Clipping</label>
                  <input class="form-control" type="text" name ="jcliping">
                </div>      
                <div class="form-group">
                  <label>Jenis Clipping</label>
                  <select class="form-control" name="jenis">
                      <option value=""></option>
                      <option value="clip">Clip</option>
                      <option value="event">Event</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Upload Gambar Content</label>
                  <input class="form-control" type="file" name ="upload">
                </div>
                <font color="#FF0000"><span>* Ket Ukuran gambar Content max 1700 x 730 pixels</span></font><br><br>
                <button type="submit" class="btn btn-xm btn-success " name="submit">Simpan</button>
                <button type="Reset" class="btn btn-xm btn-warning " name="Reset">Reset</button>
             
            <form>
                <a href="<?php echo base_url()?>index.php/con_admin/tampilClipig" class="btn btn-xm btn-warning ">Tampil Seluruh</a>   
             </div>
              <div class="col-lg-4">

              </div>
         </div>
      </div>
  </div>
                     

    </div>
</div>
