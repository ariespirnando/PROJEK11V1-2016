<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin || TVS MotoLlampung</title>

    
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/bower_components/table.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/tvs-logo.png">  

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css"/>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css"/>

       
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html">C-Panel Admin TVS Motor Kedaton</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                

                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url(); ?>index.php/conWeb">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a target="_blank" href="<?php echo base_url(); ?>index.php/conWeb"><i class="fa fa-home fa-fw"></i> Website</a>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>index.php/con_login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <br>
						<li align="Center">
							 <a href="<?php echo base_url();?>index.php/con_admin/tampilPicture"><img src="<?php echo base_url(); ?>assets/gambar/tvs-logo.png" width = '50%' height = '50%'></a>
						</li>

						<li>
                            <a href="<?php echo base_url();?>index.php/con_admin/tampilPicture"><i class="fa fa-edit fa-fw"></i> Picture</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/con_admin/tampilProduk"><i class="fa fa-edit fa-fw"></i> Produk</a>
                        </li>
						<li>
                            <a href="<?php echo base_url();?>index.php/con_admin/tampilContent"><i class="fa fa-edit fa-fw"></i> Contents</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/con_admin/tampilClipig"><i class="fa fa-edit fa-fw"></i> Clipping</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/con_admin/daftarPelanggan"><i class="fa fa-edit fa-fw"></i> Pelanggan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/con_admin/service"><i class="fa fa-edit fa-fw"></i> Service</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/con_admin/komunitas"><i class="fa fa-edit fa-fw"></i> Komunitas</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/con_admin/user"><i class="fa fa-user fa-fw"></i> User</a>
                        </li>
						
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php echo $contents; ?>	
            </div>
            <!-- /.container-fluid -->
			</div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.js"></script>
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
