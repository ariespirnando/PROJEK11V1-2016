<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Produk</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo base_url()?>index.php/con_admin/Produk" class="btn btn-xm btn-success">Tambah Produk</a>
            <br><br>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Warna</th>
                  <th>Gambar</th>
                  <th>Persediaan</th>
                  <th>Ketrangan</th>
                  <th width="150px">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($isi->result() as $i) {
                  if($i->status == '1'){
                      $akv = "<font color='FF0000'>Tidak Ada</font>";
                  }else{
                      $akv = "Ada";
                  }
                  echo "
                  <tr>
                    <td>$no</td>
                    <td>$i->namaProduk</td>
                    <td>$i->warna</td>";
                    ?>
                    <td><img width="90" height="50" src="<?php echo base_url();?>assets/Upload/<?php echo $i->gambarProduk ?>"></td>
                    <?php
                    echo "
                    <td>$akv</td>
                    <td>$i->keteranganProduk</td>";
                    ?>
                    <td><span><a  onclick="return confirm('Yakin mengahapus ?')" href="<?php echo base_url();?>/index.php/con_admin/hapusProduk/<?php echo $i->idProduk?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a>
                       
                        <a  onclick="return confirm('Yakin mengubah status ?')" href="<?php echo base_url();?>/index.php/con_admin/statusProduk/<?php echo $i->idProduk?>" class="btn btn-xm btn-danger"><i class="glyphicon glyphicon-check"></i></a>
                         </a>
                        
                        <a href="<?php echo base_url();?>/index.php/con_admin/komentar/<?php echo $i->idProduk?>" class="btn btn-xm btn-warning"><i class="glyphicon glyphicon-send"></i></a></span>                          
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
