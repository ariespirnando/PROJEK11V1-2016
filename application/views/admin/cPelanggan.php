
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
                        <b>Daftar Pelanggan,</b><hr><br>
                        <table width="100%">
                            <tr>
                                <td>No</td>
                                <td>Kode Pelanggan</td>
                                <td>Nama Pelanggan</td>
                                <td>Alamat</td>
                                <td>Telepon</td>
                            </tr>
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
                                  <td>$i->Telpon</td>
                                </tr>";
                                $no++;
                              }
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
