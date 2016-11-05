<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Clipping</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo base_url()?>index.php/con_admin/cliping" class="btn btn-xm btn-success">Tambah Cliping</a>
            <br><br>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Clipping</th>
                  <th>Jenis</th>
                  <th>Gambar</th>
                  <th width="50px">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($isi->result() as $i) {
                  echo "
                  <tr>
                    <td>$no</td>
                    <td>$i->judulCliping</td>
                    <td>$i->jenis</td>";
                    ?>
                    <td><img width="90" height="50" src="<?php echo base_url();?>assets/Upload/<?php echo $i->gambar ?>"></td>
                    
                    <td><span><a onclick="return confirm('Yakin mengahapus ?')" href="<?php echo base_url();?>/index.php/con_admin/hapusClipping/<?php echo $i->idCliping?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a>
                        
                        </span>                          
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
