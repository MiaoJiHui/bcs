<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="/thatsweb/thatsproj/bcs2/Public/css/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="/thatsweb/thatsproj/bcs2/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="/thatsweb/thatsproj/bcs2/Public/css/font-awesome.css" rel="stylesheet">
    <link href="/thatsweb/thatsproj/bcs2/Public/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="/thatsweb/thatsproj/bcs2/Public/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="/thatsweb/thatsproj/bcs2/Public/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="/thatsweb/thatsproj/bcs2/Public/css/forms.css" rel="stylesheet">
    <link href="/thatsweb/thatsproj/bcs2/Public/css/sweetalert.css" rel="stylesheet">

    <link href="/thatsweb/thatsproj/bcs2/Public/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	    <!-- 引入header -->
		    <div class="container">
    <div class="row">
       <div class="col-md-5">
          <!-- Logo -->
          <div class="logo">
             <h1><a href="<?php echo U('User/Browsing');?>">Urbantomy BCS</a></h1>
          </div>
       </div>
       <div class="col-md-5">
          <div class="row">
            <div class="col-lg-12">
              <div class="input-group form">
                  <!--  <input type="text" class="form-control" placeholder="Search...">
                   <span class="input-group-btn">
                     <button class="btn btn-primary" type="button">Search</button>
                   </span> -->
                   <!-- <button class="btn" type="button"><i class="fa fa-gear"></i></button> -->
              </div>
            </div>
          </div>
       </div>
       <div class="col-md-2" >
          <div class="navbar navbar-inverse" role="banner">
              <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a href="<?php echo U('Log/logout');?>">Logout</a>
                  </li>
                </ul>
              </nav>
          </div>
       </div>
    </div>
 </div>
		<!-- 引入结束 -->
	 </div>

    <div class="page-content settings-div">
    	<div class="row">
		  <div class="col-md-12">

		  	<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Account:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="account">

						</div>
					</p>
  				</div>
  			</div>
  			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Project:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="project">

						</div>
					</p>
  				</div>
  			</div>

  			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Size:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="size">

						</div>
					</p>
  				</div>
  			</div>

			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Method:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="method">

						</div>
					</p>
  				</div>
  			</div>

  			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Sales:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="sales">

						</div>
					</p>
  				</div>
  			</div>

			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Inv.Content:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="inv-content">

						</div>
					</p>
  				</div>
  			</div>

  			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>VAT Special Inv:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="vat-special-inv">

						</div>
					</p>
  				</div>
  			</div>

  			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Territory:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="territory">

						</div>
					</p>
  				</div>
  			</div>

  			<div class="row">
		  		<div class="col-md-2 col-sm-3 col-xm-3">
					<h4>Copy:</h4>
		  		</div>
  				<div class="col-md-10 col-sm-9 col-xs-9">
		  			<p>
						<div id="copy">

						</div>
					</p>
  				</div>
  			</div>

		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>

         </div>
         <input type="hidden" name="tags" value='<?php echo ($json); ?>'>
      </footer>
      <input type="hidden" class="abc" value="$backend">
      <link href="/thatsweb/thatsproj/bcs2/Public/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/thatsweb/thatsproj/bcs2/Public/js/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="/thatsweb/thatsproj/bcs2/Public/js/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/thatsweb/thatsproj/bcs2/Public/bootstrap/js/bootstrap.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/datatables/dataTables.bootstrap.js"></script>




    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/select/bootstrap-select.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/tags/js/bootstrap-tags.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/moment/moment.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="/thatsweb/thatsproj/bcs2/Public/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="/thatsweb/thatsproj/bcs2/Public/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


    <link href="/thatsweb/thatsproj/bcs2/Public/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="/thatsweb/thatsproj/bcs2/Public/js/bootstrap-editable.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/js/custom.js"></script>
    <script src="/thatsweb/thatsproj/bcs2/Public/js/forms.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/js/tables.js"></script>
    <script src="/thatsweb/thatsproj/bcs2/Public/js/sweetalert.min.js"></script>
    <script src="/thatsweb/thatsproj/bcs2/Public/js/main.min.js"></script>
    <script>
    	$(document).ready(function(){
    		// var settings =  $("input")
        $("#account").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		    $("#project").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		    $("#size").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		    $("#method").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		    $("#sales").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		    $("#inv-content").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		    $("#vat-special-inv").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		    $("#territory").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });
		     $("#copy").tags({
		      suggestions: <?php echo ($all_tag); ?>,
		      tagData: <?php echo ($selected_tag); ?>
		    });

		    // 删除tag
		    $("i.remove").click(function(){

		    	swal({
					title: "Are you sure to delete?",
					text: "",
					type: "warning",
					showCancelButton: true,
				    confirmButtonColor: "#DD6B55",
				    confirmButtonText: "Yes, remove it!",
				    closeOnConfirm: false
				}, function(){

					$.post("<?php echo U('User/delete');?>?id="+id, function(data){
						if(data == "true"){
							swal({
									title: "Success!",
									text: "",
									type: "success",
									timer: 500,
									showConfirmButton: false
								 },function(){
								 	location.reload();
								 }
								);
						}
					});

				});
		    })
    	});

    </script>
  </body>
</html>