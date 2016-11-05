 <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInDown">
                <font size="5"><b><?php echo $isi['namaProduk'] ?></b></font>
                <hr>
                    <div class="row col-md-8">

                      <div class="col-md-12 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                      
                       

                          <table>
                            <tr>
                              <td><img src="<?php echo base_url() ?>assets/Upload/<?php echo $isi['gambarProduk']?>" width="400" hight="80"></td>
                              <td width="20px"></td>
                              <td><p><span><b></b>
                                  <b>Keterangan</b> : <br>
                                        <?php echo $isi['keteranganProduk'] ?><br>
                                  <b>Warna</b>      : <br>
                                        <?php echo $isi['warna'] ?>
                                  </span></p>
                              </td>
                            </tr>
                          </table>
                        <hr>

                        <h1 id="comments_title"><?php echo $jum ?> Komentar</h1>
                        <div class="media comment_section">
                        <?php foreach ($Koment->result() as $k) {
                         ?>
                         <div class="media-body">
                                <h5><?php echo $k->NamaPelanggan?>,</h5>
                                <p><?php echo $k->komentar?></p>
                                <h5 align="right"><?php echo tgl_indo_timestamp($k->tanggal) ?></h5>
                                <hr>
                            </div>
                            
                         <?php
                        }
                        ?>
                        <?php echo form_open('conWeb/komentar')?>
                            <input type="hidden" name="idProduk" value ="<?php echo $isi['idProduk']?>">
                            <button type="submit" name="tampil" class="btn ">Tampilkan Semua Komentar............</button>
                            </form>
                        </div> 
                        

                        
                      </div> 
                    </div>
                    <div class="col-md-4 pull-right">
                    <div class="widget">
                    <table>
                        <tr>
                            <td>
                                <?php echo form_open('conWeb/komentar')?>
                                    <b>Isi Komentar<hr></b>

                                    <table>
                                       <tr>
                                           <td>*Nama Pelanggan</td>
                                           <td><input class="form-control" type="text" name ="nama" id="kode">
                                           <input type="hidden" name="idPelanggan" id="kodePelanggan">
                                           <input type="hidden" name="idProduk" value ="<?php echo $isi['idProduk']?>">
                                           </td>

                                           <td><br><br></td>
                                       </tr>
                                       <tr>
                                           <td>*Komentar</td>
                                           <td><textarea class="form-control" rows="5" name="komen"></textarea></td>
                                           <td><br><br><br><br><br><br></td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td><button name="post" type="submit" class="btn btn-warning">Komentar</button>
                                           <a href="<?php echo base_url()?>index.php/conWeb/produk" class="btn btn-success">Kembali</a></td>
                                       </tr>
                                   </table>
                                   <hr>
                                </form>
                            </td>
                        </tr>
                    </table>
                   
                    </div>
                </div>
                </div><!--/.tab-wrap-->               
            </div><!--/.col-sm-6-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#content-->
<br>