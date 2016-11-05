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
                                    <li class="active"><a href="#tab6" data-toggle="tab" class="tehnical">Siaran Pers</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    
                                     <div class="tab-pane fade active in" id="tab6">
                                       <div class="media">
                                            <div class="media-body">
                                            <div class="col-sm-1">
                                            </div>
                                            <div class="col-sm-11">
                                            <label>Siaran Pers</label><br>
                                            <hr>
                                             <b><?php echo tgl_indo_timestamp($d['Tanggal']) ?></b><br>
                                             <h4><?php echo $d['judulContent']?></h4>
                                             <p align="justify"><?php 
                                             echo $d['isiContent'];
                                             ?><br> 
                                             <div align="center">
                                               <img src="<?php echo base_url().'assets/Upload/'.$d['gambarContent']?>" width="400">
                                             </div>
                                             <br><br>
                                             <div align="right">
                                               <a href="<?php echo base_url()?>index.php/conWeb/media" class="btn btn-xm btn-success">Kembali</a>
                                             </div>
                                            </div>
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