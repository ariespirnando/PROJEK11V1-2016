 <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
                <font size="5"><b>Media</b></font>
                <hr>
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">

                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab6" data-toggle="tab" class="tehnical">Service</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    
                                     <div class="tab-pane fade active in" id="tab6">
                                       <div class="media">
                                            
                                            <div class="media-body">
                                              <div class="col-sm-8">
                                              
                                                <?php echo form_open('conWeb/services')?>
                                                    <div class="form-group">
                                                      Nama Pelanggan*
                                                      <input id="kode" class="form-control" type="text" name ="jcliping" style="width:50%">
                                                      <input type="hidden" name="idPelanggan" id="kodePelanggan">
                                                    </div>   
                                                    <div class="form-group">
                                                      Tahun Pembelian*
                                                      <select name="tahun" class="form-control" style="width:50%">
                                                          <option></option>
                                                          <?php for ($i=1990; $i < 2030; $i++) { 
                                                              echo "<option value=$i>$i</option>";
                                                          }?>
                                                      </select>
                                                    </div> 
                                                    <div class="form-group">
                                                      Merk Kendaraan*
                                                      <input class="form-control" type="text" name ="jenis" style="width:50%">
                                                    </div> 
                                                    <div class="form-group">
                                                      Keluhan*
                                                      <textarea name="keluhan" class="form-control" style="width:50%" rows="4"></textarea>
                                                    </div>    
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-xm btn-success " name="submit">Kirim</button>
                                                    <button type="Reset" class="btn btn-xm btn-danger " name="Reset">Reset</button>
                                                    <a href="<?php echo base_url()?>index.php/conWeb/media" class="btn btn-xm btn-success">Kembali</a>
                                                    </div>
                                                </form>
                                                <br><br>
                                                </div>
                                                 <div class="col-sm-4">
                                                <span>Kotak Dialog, </br></span>
                                                
                                                    <?php echo form_open("conWeb/services","class='form-inline'")?>
                                                        <div class="form-group">
                                                            <input id="kode3" name="cari" type="text" class="form-control" placeholder="Masukan Nama...">
                                                            <input id="kodePelanggan3" name="kode" type="hidden">
                                                        </div>
                                                            <button type="submit" name="post" class="btn btn-success">Proses</button>
                                                    </form>
                                                <br>

                                                  <?php 
                                                  foreach ($x->result() as $xx) {
                                                    echo $y."<br>".$xx->NamaPelanggan."<br><br>".$z."<br>".$xx->Komentar."<br>"; 
                                                  }
                                                  ?>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->