<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo base_url()?>index.php/con_admin/tuser" class="btn btn-xm btn-success">Tambah User</a>
            <br><br>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>CreadOn</th>
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
                    <td>$i->username</td>
                    <td>$i->password</td>";
                    ?>
                    <td><?php echo tgl_indo_timestamp($i->creadon)?></td>
                    <td><span><a  onclick="return confirm('Yakin mengahapus ?')" href="<?php echo base_url()?>index.php/con_admin/hUser/<?php echo $i->id?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a>
                      <a href="<?php echo base_url()?>index.php/con_admin/uUser/<?php echo $i->id?>" class="btn btn-xm btn-warning"><i class="glyphicon glyphicon-pencil"></i></a></span>                          
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
