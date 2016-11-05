<section id="main-slider" class="no-margin">
        <div class="carousel slide">
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
    </section><!--/#main-slider-->