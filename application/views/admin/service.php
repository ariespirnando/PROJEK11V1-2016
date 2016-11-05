<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Service</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo base_url()?>index.php/con_admin/Cservice" class="btn btn-xm btn-success">Cetak Daftar Keluhan</a>
            <br><br>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama Pelanggan</th>
                  <th>Tahun Pembelian</th>
                  <th>Merk</th>
                  <th>Keluhan</th>
                  <th>No Handphone</th>
                  <th>Status</th>
                  <th width="100px">Aksi</th>
                </tr>

              </thead>
              <tbody>
              <?php 
              $no = 1;
              foreach ($isi->result() as $i) {
                if($i->status==1){
                  $akv = "<font color='FF0000'>Belum Ditanggapi</font>";
                }else{
                  $akv = "Sudah ditanggapi";
                }
                echo "<tr>
                  <td>$no</td>
                  <td>$i->kodePelanggan</td>
                  <td>$i->NamaPelanggan</td>
                  <td>$i->tahun</td>
                  <td>$i->jenis</td>
                  <td>$i->keluahan</td>
                  <td>$i->Telpon</td>
                  <td>$akv</td>";
                  ?>
                  <td><span><a onclick="return confirm('Yakin mengahapus ?')" href="<?php echo base_url()?>index.php/con_admin/hservices/<?php echo $i->idService ?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a>
                  <?php
                    if($i->status==1){
                      ?>
                       <a href="<?php echo base_url();?>/index.php/con_admin/dialog/<?php echo $i->idService ?>" class="btn btn-xm btn-warning"><i class="glyphicon glyphicon-send"></i></a> </span>                          
                    </td>
                  </tr>
                  <?php
                    }else{
                      ?>
                      <a disabled href="" class="btn btn-xm btn-warning"><i class="glyphicon glyphicon-send"></i></a> </span>                          
                    </td>
                    </tr>
                  <?php
                  }
                    
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
