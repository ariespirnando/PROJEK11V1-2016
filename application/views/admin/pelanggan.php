<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Pelanggan</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo base_url()?>index.php/con_admin/cPelangan" class="btn btn-xm btn-success">Cetak Data Pelanggan</a>
            <br><br>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th width="50px">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
              foreach ($isi->result() as $i) {
                if($i->kodePelanggan!='PL1000001'){
                echo "
                <tr>
                  <td>$no</td>
                  <td>$i->kodePelanggan</td>
                  <td>$i->NamaPelanggan</td>
                  <td>$i->Alamat</td>
                  <td>$i->Telpon</td>";
                  ?>
                  <td><span><a href="<?php echo base_url()?>index.php/con_admin/hPelangan/<?php echo $i->kodePelanggan ?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a>
                        </span>                          
                  </td>
                </tr>
                <?php
                $no++;
              }

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
