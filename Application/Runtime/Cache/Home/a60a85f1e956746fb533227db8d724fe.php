<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="/Public/css/styles.css" rel="stylesheet">
    <link href="/Public/css/sweetalert.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <!-- <li><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li> -->
                    <li class="current"><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Add Page</a></li>
                    <li class="current"><a href="page_list.html"><i class="glyphicon glyphicon-pencil"></i> Page Management</a></li>
                    <!-- <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
               
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li> -->
                </ul>
             </div>


		  </div>
		  <div class="col-md-10">

  			<div class="content-box-large">
          <div class="panel-heading">
            <div class="panel-title">type：<input type="text" id="type" value="<?php echo ($select[0][type]); ?>"></div>
            <div class="panel-title">name：<input type="text" id="name" value="<?php echo ($select[0][name]); ?>"></div>
          </div>
          <div class="panel-body">
            <textarea name="financial.bz" id="ckeditor" style="width:200px"><?php echo ($select[0][content]); ?></textarea>
            <input type='hidden' id='id' value="<?php echo ($select[0][id]); ?>"/>
          </div>
            <input type="button" class="btn btn-primary btn-lg btn-block" value="Submit" onclick="upload();"/>
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
      </footer>

    <link rel="stylesheet" type="text/css" href="/Public/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>

    <script src="/Public/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="/Public/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="/Public/vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="/Public/js/custom.js"></script>
    <script src="/Public/js/editors.js"></script>
    <script src="/Public/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="/Public/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/Public/ckfinder/ckfinder.js"></script>
    <script type="text/javascript">

      CKEDITOR.replace('financial.bz');
      /*$(function () {
          CKEDITOR.replace('financial.bz', { height: '200px', width: '200px' });
      });*/
      function upload(){
        var data = CKEDITOR.instances.ckeditor.getData();
        var name = $("#name").val();
        var type = $("#type").val();
        var id = $("#id").val();
        $.post("<?php echo U('Page/update');?>",{data:data,name:name,type:type,id:id},function(a)
              {
                swal({
                title: "Update Successfully!",   
                type: "success",   
                timer: 1000,   
                showConfirmButton: false
                },function(){
                  location.href="<?php echo U('index/page_list');?>";
                })
              });
      }
    </script>
  </body>
</html>