<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Komunitas</h1>
    </div>
                    <!-- /.col-lg-12 -->
    <div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-body">
            <div class="alert alert-warning">
            <?php echo form_open('con_admin/komunitas') ?>
              <div class="form-group">
                  <label>Isi Komentar</label>
                  <textarea rows="3" class="form-control" name="komentar"></textarea>
                </div> 
                 <div class="form-group">
                 <button type="submit" name="post" class="btn btn-success">Komentar</button>
                </div> 
            </div>
            </form>
            <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggan</th>
                  <th>Komentar</th>
                  <th>Tanggal</th>
                  <th width="50px">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $no = 1;
                foreach ($isi->result() as $i) {
                 echo "<tr>
                  <td>$no</td>
                  <td>$i->NamaPelanggan</td>
                  <td>$i->komentar</td>";
                  ?>
                  <td><?php echo tgl_indo_timestamp($i->tanggal);?></td>
                  <td><a onclick="return confirm('Yakin mengahapus ?')" 
                  href="<?php echo base_url();?>/index.php/con_admin/hapusKomentar/<?php echo $i->id ?>" class="btn btn-xm btn-success"><i class="glyphicon glyphicon-trash" ></i> </a></td>
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
