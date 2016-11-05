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

    

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/tvs-logo.png">  
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css"/>

       
</head>

<body bgcolor="#000000">

    <div id="wrapper">
        <!-- Page Content -->
                <div class="col-md-5"></div>
                <div class="col-md-2">
                <br><br><br><br><br><br>
                <div class="alert alert-warning">
                <?php echo form_open('con_login')?>
                <label>User Login</label>
                <br>
                    <div class="form-group">
                        <input name="Username" type="text" class="form-control input-lg" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input name="Password" type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button name="post" type="submit" class="btn btn-primary btn-lg btn-block">LogIn</button>
                        <span class="pull-right"><a href="<?php echo base_url(); ?>index.php/conWeb">Website</a></span>
                    </div>
                </form>
                </div>
                </div>
                <div class="col-md-5"></div>
          
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



</body>

</html>
