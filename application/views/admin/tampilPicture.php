<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Picture</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo base_url()?>index.php/con_admin" class="btn btn-xm btn-success">Tambah Picture</a>
            <br><br>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Gambar</th>
                  <th>Jenis Gambar</th>
                  <th>Gambar</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                  <th width="100px">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($isi->result() as $i) {
                  if($i->Status == '1'){
                      $akv = "<font color='FF0000'>Belum Aktif</font>";
                  }else{
                      $akv = "Aktif";
                  }
                  echo "
                  <tr>
                    <td>$no</td>
                    <td>$i->namaGambar</td>
                    <td>$i->JenisGambar</td>";
                    ?>
                    <td><img width="90" height="50" src="<?php echo base_url();?>assets/Upload/<?php echo $i->Gambar ?>"></td>
                    <?php
                    echo"
                    <td>$i->Keterangan</td>
                    <td>$akv</td>";
                    ?>
                    <td><span><a onclick="return confirm('Yakin mengahapus ?')" href="<?php echo base_url();?>/index.php/con_admin/hapusGambar/<?php echo $i->idGambar?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a>
                        
                        <a onclick="return confirm('Yakin mengubah status ?')" href="<?php echo base_url();?>/index.php/con_admin/statusGambar/<?php echo $i->idGambar?>" class="btn btn-xm btn-danger"><i class="glyphicon glyphicon-check"></i></a></span>                          
                    </td>
                  </tr>
                  <?php
                  $no++;
                }
              ?>
              </tbody>
              
            </table>

              </div>
         </div>
      </div>
  </div>
                     

    </div>
</div>
