<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login</title>
	<?php
		echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('plugins/metisMenu/metisMenu.min');		
		echo $this->Html->css('sb-admin-2');
	?>
    <link href="/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- jQuery Version 1.11.0 -->
    <script src="/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/sb-admin-2.js"></script>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <!--<form role="form" action="users/login" method="post">-->
                        <?php echo $this->Form->create('User',array('role'=>'form','method'=>'post','action'=>'login')); ?>
                            <fieldset>
                                <div style="color:red;"><?php echo $this->Session->flash(); ?></div>
                                <div class="form-group">
                                    <?php echo $this->Form->input('username',array('placeholder'=>'Username',"class"=>"form-control",'label'=>'')); ?>
                                </div>
                                <div class="form-group">
                                  <?php echo $this->Form->input('password',array('placeholder'=>'Password',"class"=>"form-control",'label'=>'')); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo $this->Form->submit('Submit',array('class'=>'btn btn-lg btn-success btn-block')); ?>
                            </fieldset>
                         <?php echo $this->Form->end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>