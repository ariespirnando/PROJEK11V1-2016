<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Contents</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo base_url()?>index.php/con_admin/content" class="btn btn-xm btn-success">Tambah Contents</a>
            <br><br>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Content</th>
                  <th>Isi Content</th>
                  <th>Gambar</th>
                  <th>Tanggal</th>
                  <th width="100px">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($isi->result() as $i) {
                  echo "
                  <tr>
                    <td>$no</td>
                    <td>$i->judulContent</td>";
                    ?>
                    <td><?php $s = substr($i->isiContent, 0,300);
                    echo $s;?>.........</td>
                    
                    <td><img width="90" height="50" src="<?php echo base_url();?>assets/Upload/<?php echo $i->gambarContent ?>"></td>
                    <td><?php echo tgl_indo_timestamp($i->Tanggal)?></td>
                    <td><span><a onclick="return confirm('Yakin mengahapus ?')" href="<?php echo base_url();?>/index.php/con_admin/hapusContent/<?php echo $i->idContent?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a>
                        <a href="<?php echo base_url();?>/index.php/con_admin/uContent/<?php echo $i->idContent?>" class="btn btn-xm btn-warning"><i class="glyphicon glyphicon-pencil"> </i></a>
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
