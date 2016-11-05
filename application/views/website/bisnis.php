 <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 wow fadeInDown">
                <font size="5"><b>Solusi Bisnis</b></font>
                <hr>
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">

                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Testimony</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="tehnical">Vidio</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Galeri</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1">
                                        <div class="media">
                                            <div class="media-body" align="center">
                                            <video width="600" height="300" controls >
                                                <source src="<?php echo base_url()?>assets/Upload/2.MKV">
                                            </video>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade " id="tab2">
                                        <div class="media-body" align="center">
                                            <video width="600" height="300" controls >
                                                <source src="<?php echo base_url()?>assets/Upload/3.MKV">
                                            </video>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade " id="tab3">
                                        <div class="media">
                                            <div class="media-body" id="main-slider" align="center">
                                            <div class="carousel slide" width="600" height="300">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                                                        <li data-target="#main-slider" data-slide-to="1"></li>
                                                        <li data-target="#main-slider" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">

                                                        <div class="item active" style="background-image: url(<?php echo base_url()?>assets/Upload/file_1476937119.jpg)">
                                                           
                                                        </div><!--/.item-->
                                                        <?php
                                                        foreach ($isi->result() as $i) {
                                                            ?>
                                                            <div class="item" style="background-image: url(<?php echo base_url()?>assets/Upload/<?php echo $i->Gambar;?>)">
                                                            </div><!--/.item-->
                                                            <?php
                                                        }
                                                        ?>
                                                    </div><!--/.carousel-inner-->
                                                </div><!--/.carousel-->
                                                <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                                                    <i class="fa fa-chevron-left"></i>
                                                </a>
                                                <a class="next hidden-xs" href="#main-slider" data-slide="next">
                                                    <i class="fa fa-chevron-right"></i>
                                                </a>
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