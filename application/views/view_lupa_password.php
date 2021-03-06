<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PT PJB - EXPRESSION OF INTEREST (EoI)</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" >
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">  
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet">        
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet"> 

    </head>
     <body class="login-page">
        <div class="login-box">
		<div class="login-box-body">
		<center><a href=<?php echo base_url() ?> class="logo"><img src="<?php echo base_url('assets/img/pjblogo.png'); ?>" /></a></br><h3><b>Expression Of Interest (EoI)</b></h3></center>
                <p class="login-box-msg">Enter the email address you used when creating the account and click submit. A message will be sent to that address containing a link to reset your password.</p>
				
                	<form action="<?php echo base_url()?>forgot_password/proses" method="post">
					
					  <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>    
                    <?php } else if ($this->session->flashdata('result_sukses')) {?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong>
                            <?php echo $this->session->flashdata('result_sukses'); ?>
                        </div>    
                    <?php } ?>

					 <div class="form-group has-feedback">
                        <input type="text" name="email" class="form-control" placeholder="Email" required/>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>					
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                        </div><!-- /.col -->
                    </div>
                </form>                

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script> 
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>"></script>       
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
