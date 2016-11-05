<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TVS Motor || Cabang Kedaton Lampung</title>
	
	<!-- core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.css"/>
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    

    <link href="<?php echo base_url()?>assets/js/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url()?>assets/js/jquery-ui.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/tvs-logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><span><i class="fa fa-phone-square"></i> Nomor I-Care : +0123 456 70 90 </p></span></div>
                    </div>
                    <div class="col-sm-6 col-xs-8 text-right">
                        <a href="<?php echo base_url()?>other/TVS PARTS.html" class="btn btn-danger btn-sm" target="_blank" >Online Sparepart</a>
                       <a href="<?php echo base_url()?>index.php/con_login" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-log-in"></i></a>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()?>index.php/conWeb"><img src="<?php echo base_url()?>assets/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a  href="<?php echo base_url()?>index.php/conWeb/korporat">Korporat</a></li>
                        <li><a href="<?php echo base_url()?>index.php/conWeb/produk">Produk</a></li>
                        <li><a href="<?php echo base_url()?>index.php/conWeb/bisnis">Solusi Bisnis</a></li>
                        <li><a href="<?php echo base_url()?>index.php/conWeb/media">Media</a></li>      						
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <?php echo $contents;?>
    
    <footer id="footer" class="midnight-blue navbar navbar-invers navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 TVS_MOTOR Kedaton.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script>
     $(function () {
        $("#kode").autocomplete({   
            minLength:0,
            delay:0,
            source:'<?php echo site_url('incPelanggan/get_all');?>', 
            select:function(event, ui){
                $('#kodePelanggan').val(ui.item.kodePelanggan);
                $('#NamaPelanggan').val(ui.item.NamaPelanggan);
                }
            });
        });
    </script>
    <script>
     $(function () {
        $("#kode1").autocomplete({   
            minLength:0,
            delay:0,
            source:'<?php echo site_url('incPelanggan/get_all');?>', 
            select:function(event, ui){
                $('#kodePelanggan1').val(ui.item.kodePelanggan);
                $('#NamaPelanggan1').val(ui.item.NamaPelanggan);
                }
            });
        });
    </script>
    <script>
     $(function () {
        $("#kode2").autocomplete({   
            minLength:0,
            delay:0,
            source:'<?php echo site_url('incPelanggan/get_all');?>', 
            select:function(event, ui){
                $('#kodePelanggan2').val(ui.item.kodePelanggan);
                $('#NamaPelanggan2').val(ui.item.NamaPelanggan);
                }
            });
        });
    </script>
     <script>
     $(function () {
        $("#kode3").autocomplete({   
            minLength:0,
            delay:0,
            source:'<?php echo site_url('incPelanggan/get_all');?>', 
            select:function(event, ui){
                $('#kodePelanggan3').val(ui.item.kodePelanggan);
                $('#NamaPelanggan3').val(ui.item.NamaPelanggan);
                }
            });
        });
    </script>

    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#tabeldata1").dataTable({         
                    "language": {"sProcessing":   "Sedang memproses...",
                    "sLengthMenu":   "Tampilkan _MENU_ entri",
                    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix":  "",
                    "sSearch":       "Cari Data: ",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                    "sLast":     "Terakhir"
                    }
        }
        });
            });
</script>

</body>
</html>