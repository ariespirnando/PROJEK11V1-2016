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
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Siaran Pers</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Pers Cliping</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Vidio</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Event</a></li>
                                    <li class=""><a href="#tab6" data-toggle="tab" class="tehnical">Service</a></li>
                                    <li class=""><a href="#tab7" data-toggle="tab" class="tehnical">Komunitas</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                            <div class="media-body">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-11">
                                            <label>Siaran Pers</label><br>
                                            <hr>
                                            <?php foreach ($data->result() as $d) {
                                            ?>   
                                             <b><?php echo tgl_indo_timestamp($d->Tanggal) ?></b><br>

                                             <h4><?php echo $d->judulContent?></h4>
                                             <p align="justify"><?php 
                                             $s = substr($d->isiContent, 0,300);

                                             echo $s;
                                             ?> <a href="<?php echo base_url()?>index.php/conWeb/pers/<?php echo $d->idContent?>">Read more....</a></p><br>
                                            <?php
                                            }?> 
                                            </div>
                                          </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade " id="tab2">
                                        <div class="media">
                                            <div class="media-body">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-11">
                                            <label>Pers Cliping</label><br>
                                            <hr>
                                            <table width="100%">
                                            
                                            <?php foreach ($isi->result() as $i) {
                                            ?>   
                                              <tr>
                                                <td><img src="<?php echo base_url()?>assets/Upload/<?php echo $i->gambar ?>" width="100"></td>
                                                <td><?php echo $i->judulCliping?><br><a href="<?php echo base_url()?>index.php/conWeb/dCliping/<?php echo $i->idCliping ?>"> Download<br></a></td>
                                              </tr>
                                              <tr>
                                                <td colspan="2"><hr></td>
                                              </tr>
                                            <?php
                                            }?> 
                                            </table>
                                            </div>
                                          </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade " id="tab4">
                                        <div class="media">
                                            <div class="media-body" align="center">
                                                <video width="600" height="300" controls >
                                                    <source src="<?php echo base_url()?>assets/Upload/1.WEBM">
                                                </video>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade " id="tab5">

                                        <div class="media">
                                            <div class="media-body">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-11">
                                            <label>Event</label><br>
                                            <hr>
                                            <table width="100%">
                                            
                                            <?php foreach ($eve->result() as $i) {
                                            ?>   
                                              <tr>
                                                <td><img src="<?php echo base_url()?>assets/Upload/<?php echo $i->gambar ?>" width="100"></td>
                                                <td><?php echo $i->judulCliping?><br><a href="<?php echo base_url()?>index.php/conWeb/event/<?php echo $i->idCliping ?>"> more<br></a></td>
                                              </tr>
                                              <tr>
                                                <td colspan="2"><hr></td>
                                              </tr>
                                            <?php
                                            }?> 
                                            </table>
                                            </div>
                                          </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade " id="tab6">
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
                                                      Jenis Kendaraan*
                                                      <input class="form-control" type="text" name ="jenis" style="width:50%">
                                                    </div> 
                                                    <div class="form-group">
                                                      Keluhan*
                                                      <textarea name="keluhan" class="form-control" style="width:50%" rows="4"></textarea>
                                                    </div>    
                                                    <div class="form-group">
                                                    <button type="submit" class="btn btn-xm btn-success " name="submit">Kirim</button>
                                                    <button type="Reset" class="btn btn-xm btn-danger " name="Reset">Reset</button>
                                                    </div>
                                                </form>
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
                                               
                                                </div>
                                            </div>
                                        </div>
                                     </div>

                                      <div class="tab-pane fade " id="tab7">
                                        <div class="media">
                                            <div class="media-body" align="center">
                                            <br><br><br>
                                            <?php echo form_open('conWeb/komunitas') ?>
                                            <label>Komunitas TVS Motor Lampung</label>
                                            <br>
                                            <input id="kode2" style="width: 300px;" class="form-control"type="text" name="pelanggan" placeholder="Masukan Nama Anda..">
                                            <input type="hidden" name="idpel" id="kodePelanggan2">
                                            <br>
                                            <button style="width: 300px;" class="form-control btn btn-success" type="submit" name="post">Masuk Kekomunitas</button>
                                            </div>
                                            </form>
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