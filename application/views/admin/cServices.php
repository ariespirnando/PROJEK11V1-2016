
<!DOCTYPE html>
<head>
</head>
<body>
    
    <!-- HEADER END-->
    
    <!-- MENU SECTION END-->
    <div class="content-wrapper">

        <div class="container">
            
                <b>TVS Motor Cabang Kedaton</b>
                <div class="col-md-12">
                    <div class="alert">
                    <br>
                       <?php echo date('d-M-Y')?>
                       <br>
                        <b>Daftar Keluhan,</b><hr><br>
                        <table width="100%">
                        <tr>
                          <td>No</td>
                          <td>Kode Pelanggan</td>
                          <td>Nama Pelanggan</td>
                          <td>Tahun Pembelian</td>
                          <td>Merk</td>
                          <td>Keluhan</td>
                          <td>No Handphone</td>
                        </tr>
                      <?php 
                      $no = 1;
                      foreach ($isi->result() as $i) {
                        echo "<tr>
                          <td>$no</td>
                          <td>$i->kodePelanggan</td>
                          <td>$i->NamaPelanggan</td>
                          <td>$i->tahun</td>
                          <td>$i->jenis</td>
                          <td>$i->keluahan</td>
                          <td>$i->Telpon</td>
                        </tr>";
                      
                      $no++;
                      }
                      ?>
                      </table>
                        <br>
                        <hr>
                        <br> 
                        <br><br><br>

            </div>
        </div>
    </div>
</body>
</html>
