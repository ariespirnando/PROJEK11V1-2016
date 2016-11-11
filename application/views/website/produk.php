 <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInDown">
                <font size="5"><b>Produk</b></font>
                <hr>
                    <div class="row col-md-8">
                    <?php 
                    foreach ($isi->result() as $i) {
                      ?>
                      <a href="<?php echo base_url()?>index.php/conWeb/komentar/<?php echo $i->idProduk?>">
                      <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <hr>
                            <img src="<?php echo base_url() ?>assets/Upload/<?php echo $i->gambarProduk;?>" width="100%">
                            <h3><b><?php echo $i->namaProduk ;?></b></h3>
                        <hr>
                      </div>
                      </a>
                      <?php
                    }
                    ?>
                           

                    </div>
                    <div class="col-md-4 pull-right">
                    <div class="widget">
                    <div class="widget search pull-right">
                        <?php echo form_open("conWeb/produk","class='form-inline'")?>
                            <div class="form-group">
                                <input name="cari" type="text" class="form-control" placeholder="Cari disini...">
                            </div>
                                <button type="submit" name="post" class="btn btn-success">Cari</button>
                        </form>
                    </div><!--/.search-->

                    <table>
                        <tr>
                            <td>
                                <?php echo form_open('conWeb/pelanggan')?>
                                    <b>Isi Data Pelanggan<hr></b>

                                    <table>
                                       <tr>
                                           <td>Kode Pelanggan</td>
                                           <td><input disabled class="form-control" value="<?php echo $d ?>"></td>
                                           <td><br><br></td>
                                       </tr>
                                       <tr>
                                           <td>Nama Pelanggan</td>
                                           <td><input class="form-control" type="text" name ="nama"></td>
                                           <td><br><br></td>
                                       </tr>
                                       <tr>
                                           <td>Alamat</td>
                                           <td><input class="form-control" type="text" name ="alamat"></td>
                                           <td><br><br></td>
                                       </tr>
                                       <tr>
                                           <td>Telepon</td>
                                           <td><input class="form-control" type="text" name ="telepon"></td>
                                           <td><br><br></td>
                                       </tr>                                      
                                       <tr>
                                           <td></td>
                                           <td><button name="post" type="submit" class="btn btn-success">Simpan</button></td>
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