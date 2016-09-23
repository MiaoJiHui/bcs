<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Business Customer System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="/Public/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/css/sweetalert.css">
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Business Customer System</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <input class="form-control" type="text" id="account" placeholder="Account">
			                <input class="form-control" type="password" id="password" placeholder="Password">
			                <div class="action">
			                    <a class="btn btn-primary signup" onclick="login();">Login</a>
			                </div>                
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/custom.js"></script>
    <script type="text/javascript" src="/Public/js/sweetalert.min.js"></script>
    <script>
    	function login(){
			var account = $('#account').val();
			var password = $('#password').val();
			if (account == "" || password == "" ) {
				swal({   
						title: "Please enter your account and password!",   
						type: "warning",   
						timer: 1000,   
						showConfirmButton: false
				 });
				return false;
			}else{
				$.post('<?php echo U('Log/login');?>',{account:account,password:password},function(data){
					if (data == "1"){
						swal({   
							title: "Oops...",
							text: "User does not exist or username is incorrect!",   
							type: "error",   
							timer: 2000,   
							showConfirmButton: false
						 });
					}else if(data == "2"){
						swal({   
							title: "Oops...",
							text: "Wrong username or password!",   
							type: "error",   
							timer: 1000,   
							showConfirmButton: false
						 });
					}else {
						window.location.href = "<?php echo U('User/Browsing');?>";
					}
				});
		    }
		}
    </script>
  </body>
</html>