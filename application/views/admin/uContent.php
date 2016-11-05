<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Update Contents</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">

            <?php echo form_open_multipart('con_admin/uContent'); ?>
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Judul Contant</label>
                  <input class="form-control" type="text" name ="jcontent" value="<?php echo $isi['judulContent']?>">
                  <input type="hidden" name="idtes" value="<?php echo $ids ?>">
                </div>      
                <div class="form-group">
                  <label>Isi Content</label>
                  <textarea class="form-control" name="Keterangan" rows="4"><?php echo $isi['isiContent']?></textarea>
                </div>
                <div class="form-group">
                  <label>Upload Gambar Content</label>
                  <input class="form-control" type="file" name ="upload">
                </div>
                <font color="#FF0000"><span>* Ket Ukuran gambar Content max 1700 x 730 pixels</span></font><br><br>
                <button type="submit" class="btn btn-xm btn-success " name="submit">Ubah</button>
                <a href="<?php echo base_url()?>index.php/con_admin/tampilContent" class="btn btn-xm btn-warning ">Kembali</a> 
             
            <form>
                  
             </div>
              <div class="col-lg-4">

              </div>
         </div>
      </div>
  </div>
                     

    </div>
</div>
