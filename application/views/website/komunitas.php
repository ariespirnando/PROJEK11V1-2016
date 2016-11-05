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
                                    <li class="active"><a href="#tab7" data-toggle="tab" class="tehnical">Komunitas</a></li>                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    
                                      <div class="tab-pane fade active in" id="tab7">
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
                                            <br><br>
                                            <div align="right">
                                               <a href="<?php echo base_url()?>index.php/conWeb/media" class="btn btn-xm btn-success">Kembali</a>
                                             </div>
                                        </div>
                                     </div>
                                     <br><br>

                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->