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
    <link rel="stylesheet" type="text/css" href="/thatsweb/thatsproj/bcs2/Public/css/sweetalert.css">
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

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-12">
		  	<div class="row">
  				<div class="col-md-12">
		  				<div class="panel-body">
		  					<div class="content-box-large">
			  				<div class="panel-body">
			  				<form action="<?php echo U('User/Browsing');?>" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
			  					<div class="row">
			  						<div class="col-md-6">
			  							<div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">* Account</label>
									    <div class="col-sm-6">
										    <div>
					  							<select class="form-control" name="account" id="account">
					  							  <option value=""></option>
												  <?php if(is_array($account)): $i = 0; $__LIST__ = $account;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['companyname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
					  						</div>
									    </div>
									  </div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">* Folio</label>
										    <div class="col-sm-6">
										     	<input type="text" class="form-control" name="folio" id="folio" id="inputPassword3" >
										    </div>
										  </div>
			  						</div>
			  					</div>
			  					
			  					<div class="row">
			  						<div class="col-md-6">
			  							<div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">* Client Name CN</label>
										    <div class="col-sm-6">
											    <input type="text" class="form-control" name="cn" id="cn">
										    </div>
										  </div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">* Client Name EN</label>
										    <div class="col-sm-6">
											   <input type="text" class="form-control" name="en" id="en">
										    </div>
										  </div>
			  						</div>
			  					</div>
								  
								 <div class="row">
			  						<div class="col-md-6">
			  							<div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">* Project</label>
									    <div class="col-sm-6">
										    <div>
												<select class="form-control" name="project" id="project">
					  							  <option value=""></option>
												  <?php if(is_array($project)): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo2['id']); ?>"><?php echo ($vo2['projectname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
					  						</div>
									    </div>
									  </div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">* Months</label>
											    <div class="col-sm-6">
								  				  <input class="form-control" name="month" type="text" id="datetimepicker" placeholder="YYYY-MM-DD">
							  					</div>
										  </div>
			  						</div>
			  					</div>
								  
								  
								 <div class="row">
			  						<div class="col-md-6">
			  							<div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">* Size</label>
									    <div class="col-sm-6">
										    <div>
												<select class="form-control" name="size" id="size">
					  							  <option value=""></option>
												  <?php if(is_array($size)): $i = 0; $__LIST__ = $size;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo3['id']); ?>"><?php echo ($vo3['sizedsp']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
					  						</div>
									    </div>
									  </div>
			  						</div>
			  						<div class="col-md-6">
			  							  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">* Amount</label>
										    <div class="col-sm-6">
										      <input type="text" class="form-control" name="amount" id="amount" value=<?php echo ($data[0]['amount']); ?>>
										    </div>
										  </div>
			  						</div>
			  					</div>
			  					<div class="row">
			  						<div class="col-md-6">
			  							 <div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">* Due Date</label>
										    <div class="col-sm-6">
							  				   <input class="form-control" type="text" name="duedate" id="datetimepicker2" placeholder="YYYY-MM-DD">
						  					</div>
										  </div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">Actual</label>
										    <div class="col-sm-6">
											    <input type="text" class="form-control" name="actual" id="actual">
										    </div>
										  </div>
			  						</div>
			  						
			  						
			  					</div>
								  
								  <div class="row">
			  						<div class="col-md-6">
			  							<div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">Receipt Date</label>
										    <div class="col-sm-6">
							  					<input class="form-control" name="receiptdate" type="text" id="datetimepicker3" placeholder="YYYY-MM-DD">
						  					</div>
										  </div>
			  						</div>
			  						<div class="col-md-6">
										<div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">* Method</label>
									    <div class="col-sm-6">
										    <div>
												<select class="form-control" name="method" id="method">
					  							  <option value=""></option>
												  <?php if(is_array($method)): $i = 0; $__LIST__ = $method;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo4['id']); ?>"><?php echo ($vo4['method']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
					  						</div>
									    </div>
									  </div>
									</div>
			  						
			  					</div>
								  
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="inputPassword3" class="col-sm-3 control-label">* Sales</label>
										    <div class="col-sm-6">
											    <div>
													<select class="form-control" name="sales" id="sales">
						  							  <option value=""></option>
													  <?php if(is_array($sales)): $i = 0; $__LIST__ = $sales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo5): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo5['id']); ?>"><?php echo ($vo5['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
													</select>
						  						</div>
										    </div>
										  </div>
									</div>
									<div class="col-md-6">
										  <div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">Notes</label>
									    <div class="col-sm-6">
									      <input type="text" name="notes" class="form-control" id="notes">
									    </div>
									  </div>
			  						</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">Inv. Date</label>
									    <div class="col-sm-6">
						  				    <input class="form-control" name="invdate" type="text" id="datetimepicker4" placeholder="YYYY-MM-DD">
					  					</div>
									  </div>
									</div>
									<div class="col-md-6">
										 <div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">Inv. Content</label>
									    <div class="col-sm-6">
									    <div>
											<select class="form-control" name="invcontent" id="invcontent">
				  							  <option value=""></option>
									          <option value="Ad.">Ad.</option>
									          <option value="Service">Service</option>
											</select>
				  						</div>
								    </div>
									  </div>
									</div>
								</div>
								 
								 <div class="row">
									<div class="col-md-6">
										<div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">VAT Special Inv.</label>
									    <div class="col-sm-6">
										    <div>
												<select class="form-control" name="special" id="special">
					  							  <option value=""></option>
												  <option value="Yes">Yes</option>
												  <option value="No">No</option>
												</select>
					  						</div>
									    </div>
									  </div>
									</div>
									<div class="col-md-6">
										 <div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">Invoice No.</label>
									    <div class="col-sm-6">
										    <input type="text" class="form-control" name="invoiceno" id="invoiceno">
									    </div>
									  </div>
									</div>
								</div>

								 <div class="row">
									<div class="col-md-6">
										 <div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">* Territory</label>
									    <div class="col-sm-6">
										    <div>
												<select class="form-control" name="territory" id="territory">
					  							  <option value=""></option>
												  <?php if(is_array($territory)): $i = 0; $__LIST__ = $territory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo6): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo6['id']); ?>"><?php echo ($vo6['tdescription']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
					  						</div>
									    </div>
									  </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
									    <label for="inputPassword3" class="col-sm-3 control-label">* Copy</label>
									    <div class="col-sm-6">
										    <div>
					  							<select class="form-control" name="copy" id="copy">
					  							  <option value=""></option>
										          <option value="Yes">Yes</option>
										    	  <option value="No">No</option>
												</select>
					  						</div>
									    </div>
									  </div>
									</div>
								</div>
								  
							
								  
								<div class="row">
									 <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-12 submit-button" style="margin: 0 auto;">
									      <a class="btn btn-lg btn-block btn-primary" id="submit"  style="margin: 0 auto;" onclick="add();">Add</a>
									    </div>
									  </div>
								</div>
								 
								</form>
			  				</div>
			  			</div>
		  				</div>
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

    <script src="/thatsweb/thatsproj/bcs2/Public/js/custom.js"></script>
    <script src="/thatsweb/thatsproj/bcs2/Public/js/tables.js"></script>
    <script src="/thatsweb/thatsproj/bcs2/Public/js/main.min.js"></script>


    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/select/bootstrap-select.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/moment/moment.min.js"></script>

    <script src="/thatsweb/thatsproj/bcs2/Public/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="/thatsweb/thatsproj/bcs2/Public/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="/thatsweb/thatsproj/bcs2/Public/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="/thatsweb/thatsproj/bcs2/Public/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="/thatsweb/thatsproj/bcs2/Public/js/bootstrap-editable.min.js"></script>
    <script type="text/javascript" src="/thatsweb/thatsproj/bcs2/Public/js/sweetalert.min.js"></script>
    <script src="/thatsweb/thatsproj/bcs2/Public/js/custom.js"></script>
    <script src="/thatsweb/thatsproj/bcs2/Public/js/forms.js"></script>
    <script>
        // var account = $(".bfh-selectbox-option").html().toString();
		/*$(document).ready(function(){
		// var backend = "abcdefg";	//from php backend
		var backend = <?php echo ($backend); ?>;
		var 
		alert(backend);
		$(".bfh-selectbox-option").html(backend);
		});*/
		$('#datetimepicker,#datetimepicker2,#datetimepicker3,#datetimepicker4').datetimepicker({ 
		　　minView: "month", //选择日期后，不会再跳转去选择时分秒 
		　　format: "yyyy-mm-dd", //选择日期后，文本框显示的日期格式 
		　　language: 'zh-CN', //汉化 
		　　autoclose:true //选择日期后自动关闭 
		});

		function add(){
        var account = $('#account').val();
	    var folio = $('#folio').val();
	    var cn = $('#cn').val();
	    var en = $('#en').val();
	    var project = $('#project').val();
	    var month = $('#datetimepicker').val();
	    var size = $('#size').val();
	    var amount = $('#amount').val();
	    var duedate = $('#datetimepicker2').val();
	    var actual = $('#actual').val();
	    var receiptdate = $('#datetimepicker3').val();
	    var method = $('#method').val();
	    var sales = $('#sales').val();
	    var notes = $('#notes').val();
	    var invdate = $('#datetimepicker4').val();
	    var invcontent = $('#invcontent').val();
	    var special = $('#special').val();
	    var invoiceno = $('#invoiceno').val();
	    var territory = $('#territory').val();
	    var copy = $('#copy').val();
		$.post("<?php echo U('Information/upload');?>",{account:account,folio:folio,cn:cn,en:en,project:project,month:month,size:size,amount:amount,duedate:duedate,actual:actual,receiptdate:receiptdate,method:method,sales:sales,notes:notes,invdate:invdate,invcontent:invcontent,special:special,invoiceno:invoiceno,territory:territory,copy:copy},function(a)
        {
        	swal({
                		title: "Upload successfully!",   
						type: "success",   
						timer: 1000,   
						showConfirmButton: false
                	},function(){
                		window.location.href=document.referrer;
                	})
        });
	}
    </script>
  </body>
</html>