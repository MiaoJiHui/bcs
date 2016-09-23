<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="/thatsweb/thatsproj/bcs2/Public/css/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="/thatsweb/thatsproj/bcs2/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/thatsweb/thatsproj/bcs2/Public/css/sweetalert.css">
    <!-- styles -->
     <link href="/thatsweb/thatsproj/bcs2/Public/css/font-awesome.css" rel="stylesheet">
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
  					
  					<div class="content-box-large">
  					<form action="<?php echo U('User/Browsing');?>" class="form-horizontal" method="get" role="form" enctype="multipart/form-data">
  						<div class="row yl-search-div">
  							<div class="col-md-3">
							    <label for="inputPassword3" class="control-label">Account</label>
	  							<select class="form-control" name="account">
	  							  <option value=""></option>
								  <?php if(is_array($account)): $i = 0; $__LIST__ = $account;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo['id'] == $get['account'])): ?><option value="<?php echo ($vo['id']); ?>" selected="selected"><?php echo ($vo['companyname']); ?></option>
								    <?php else: ?>
								        <option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['companyname']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>

							<div class="col-md-3">
							    <label for="inputPassword3" class="control-label">Project</label>
	  							<select class="form-control" name="project">
	  							  <option value=""></option>
								  <?php if(is_array($project)): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if(($vo2['id'] == $get['project'])): ?><option value="<?php echo ($vo2['id']); ?>" selected="selected"><?php echo ($vo2['projectname']); ?></option>
								    <?php else: ?>
								        <option value="<?php echo ($vo2['id']); ?>"><?php echo ($vo2['projectname']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>
							<div class="col-md-3">
							    <label for="inputPassword3" class="control-label">Size</label>
	  							<select class="form-control" name="size">
	  							  <option value=""></option>
								  <?php if(is_array($size)): $i = 0; $__LIST__ = $size;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i; if(($vo3['id'] == $get['size'])): ?><option value="<?php echo ($vo3['id']); ?>" selected="selected"><?php echo ($vo3['sizedsp']); ?></option>
								    <?php else: ?>
								        <option value="<?php echo ($vo3['id']); ?>"><?php echo ($vo3['sizedsp']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>
							<div class="col-md-3">
							    <label for="inputPassword3" class="control-label">Method</label>
	  							<select class="form-control" name="method">
	  							  <option value=""></option>
								  <?php if(is_array($method)): $i = 0; $__LIST__ = $method;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo4): $mod = ($i % 2 );++$i; if(($vo4['id'] == $get['method'])): ?><option value="<?php echo ($vo4['id']); ?>" selected="selected"><?php echo ($vo4['method']); ?></option>
								    <?php else: ?>
								    	<option value="<?php echo ($vo4['id']); ?>"><?php echo ($vo4['method']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>
    
  						</div>
  						<div class="row yl-search-div">
							<div class="col-md-3">
								<label for="inputPassword3" class="control-label">Sales</label>
	  							<select class="form-control" name="sales">
	  							  <option value=""></option>
								  <?php if(is_array($sales)): $i = 0; $__LIST__ = $sales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo5): $mod = ($i % 2 );++$i; if(($vo5['id'] == $get['sales'])): ?><option value="<?php echo ($vo5['id']); ?>" selected="selected"><?php echo ($vo5['name']); ?></option>
								    <?php else: ?>
								        <option value="<?php echo ($vo5['id']); ?>"><?php echo ($vo5['name']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>

							<div class="col-md-3">
								<label for="inputPassword3" class="control-label">Inv.Content</label>
	  							<select class="form-control" name="invcontent">
	  							  <option value=""></option>
	  							  <?php if(($get['invcontent'] == 'Ad.')): ?><option value="Ad." selected="selected">Ad.</option>
								  <?php else: ?>
								    <option value="Ad.">Ad.</option><?php endif; ?>
								  <?php if(($get['invcontent'] == 'Service')): ?><option value="Service" selected="selected">Service</option>
								  <?php else: ?>
								    <option value="Service">Service</option><?php endif; ?>
								</select>
							</div>

							<div class="col-md-3">
								<label for="inputPassword3" class="control-label">VAT Special Inv.</label>
	  							<select class="form-control" name="vatspecialinv">
	  							  <option value=""></option>
	  							  <?php if(($get['vatspecialinv'] == 'Yes')): ?><option value="Yes" selected="selected">Yes</option>
	  							  <?php else: ?>
	  							    <option value="Yes">Yes</option><?php endif; ?>
								  <?php if(($get['vatspecialinv'] == 'No')): ?><option value="No" selected="selected">No</option>
	  							  <?php else: ?>
	  							    <option value="No">No</option><?php endif; ?>
								</select>
							</div>
							<div class="col-md-3">
								<label for="inputPassword3" class="control-label">Territory</label>
	  							<select class="form-control" name="territory">
	  							  <option value=""></option>
								  <?php if(is_array($territory)): $i = 0; $__LIST__ = $territory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo6): $mod = ($i % 2 );++$i; if(($vo6['id'] == $get['territory'])): ?><option value="<?php echo ($vo6['id']); ?>" selected="selected"><?php echo ($vo6['tdescription']); ?></option>
								  <?php else: ?>
								        <option value="<?php echo ($vo6['id']); ?>"><?php echo ($vo6['tdescription']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>

  						</div>
  						<div class="row yl-search-div">

							<div class="col-md-3">
								<label for="inputPassword3" class="control-label">Copy</label>
	  							<select class="form-control" name="copy">
	  							  <option value=""></option>
	  							  <?php if(($get['copy'] == 'Yes')): ?><option value="Yes" selected="selected">Yes</option>
								  <?php else: ?>
								    <option value="Yes">Yes</option><?php endif; ?>
								  <?php if(($get['copy'] == 'No')): ?><option value="No" selected="selected">No</option>
								  <?php else: ?>
								    <option value="No">No</option><?php endif; ?>
								</select>
							</div>
                            
                            <div class="col-md-3">
								<label for="inputPassword3" class="control-label">Search</label>
								<?php if(($get[search] != null)): ?><input type="text" name="search" class="form-control" placeholder="Please enter text" value=<?php echo ($get[search]); ?>></input>
	  							<?php else: ?>
	  							    <input type="text" name="search" class="form-control" placeholder="Please enter text"></input><?php endif; ?>
							</div>
							
							<div class="col-md-3">
								<button class="btn btn-primary yl-button">OK</button>
							</div>
  						</div>

  					</form>
		  				<div class="panel-body">
		  				    <a href="<?php echo U('User/edit');?>" type="button" class="btn btn-primary" style="float:right">Add +</a>
		  					<table class="table">
				              <thead>
				                <tr>
					                <th colspan=4 class="fixed"><input type="checkbox" id="checkall" ></th>
					                <?php if(is_array($field)): $i = 0; $__LIST__ = $field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th><?php echo ($vo['fieldname']); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
				                </tr>
				              </thead>
				              <tbody>
				              <?php if(is_array($income_data)): $i = 0; $__LIST__ = $income_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><tr>
				                  <td class="fixed"><input type="checkbox" name="id[]" class="check2" value="<?php echo ($vo["pid"]); ?>"/></td>
				                  <td class="fixed"><a href="<?php echo U('User/edit2');?>?id=<?php echo ($vo2['id']); ?>" title="edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>
				                  <td class="fixed"><a class="btn btn-success btn-xs" title="export excel"><i class="fa fa-file-excel-o"></i></a></td>
				                  <td class="fixed"><a class="btn btn-danger btn-xs" title="delete" onclick="del(<?php echo ($vo2['id']); ?>);"><i class="fa fa-remove"></i></a></td>
				                  <td><?php echo ($vo2['id']); ?></td>
				                  <td><?php echo ($vo2['companyname']); ?></td>
				                  <td><?php echo ($vo2['folio']); ?></td>
				                  <td><?php echo ($vo2['cnc']); ?></td>
				                  <td><?php echo ($vo2['cne']); ?></td>
				                  <td><?php echo ($vo2['projectname']); ?></td>
				                  <td><?php echo ($vo2['month']); ?></td>
				                  <td><?php echo ($vo2['sizedsp']); ?></td>
				                  <td><?php echo ($vo2['amount']); ?></td>
				                  <td><?php echo ($vo2['ddate']); ?></td>
				                  <td><?php echo ($vo2['actual']); ?></td>
				                  <td><?php echo ($vo2['gdate']); ?></td>
				                  <td><?php echo ($vo2['method']); ?></td>
				                  <td><?php echo ($vo2['sales_name']); ?></td>
				                  <td><?php echo ($vo2['notes']); ?></td>
				                  <td><?php echo ($vo2['page']); ?></td>
				                  <td><?php echo ($vo2['0']); ?></td>
				                  <td><?php echo ($vo2['special']); ?></td>
				                  <td><?php echo ($vo2['1']); ?></td>
				                  <td><?php echo ($vo2['tdescription']); ?></td>
				                  <td><?php echo ($vo2['copy']); ?></td>
				                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
				              </tbody>
                              
				            </table>
		  				</div>
                        <div class="content">
                        	<td>
			                	<div class="btn-group">
					                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					                  	<?php if(($view == 25 or $view == null)): ?>view 25 results
											<?php elseif(($view == 50)): ?>
												view 50 results
											<?php elseif(($view == 100)): ?>
												view 100 results
											<?php else: ?>
												view 200 results<?php endif; ?> 
					                  	<span class="caret"></span>
					                </button>
					                <ul class="dropdown-menu" role="menu">
					                	<li>
											<a href="<?php echo U('User/Browsing');?>?view=25&&account=<?php echo ($get[account]); ?>&&project=<?php echo ($get[project]); ?>&&size=<?php echo ($get[size]); ?>&&method=<?php echo ($get[method]); ?>&&sales=<?php echo ($get[sales]); ?>&&invcontent=<?php echo ($get[invcontent]); ?>&&vatspecialinv=<?php echo ($get[vatspecialinv]); ?>&&territory=<?php echo ($get[territory]); ?>&&copy=<?php echo ($get[copy]); ?>&&search=<?php echo ($get[search]); ?>">view 25 results</a>
										</li>
										<li>
											<a href="<?php echo U('User/Browsing');?>?view=50&&account=<?php echo ($get[account]); ?>&&project=<?php echo ($get[project]); ?>&&size=<?php echo ($get[size]); ?>&&method=<?php echo ($get[method]); ?>&&sales=<?php echo ($get[sales]); ?>&&invcontent=<?php echo ($get[invcontent]); ?>&&vatspecialinv=<?php echo ($get[vatspecialinv]); ?>&&territory=<?php echo ($get[territory]); ?>&&copy=<?php echo ($get[copy]); ?>&&search=<?php echo ($get[search]); ?>">view 50 results</a>
										</li>
										<li>
											<a href="<?php echo U('User/Browsing');?>?view=100&&account=<?php echo ($get[account]); ?>&&project=<?php echo ($get[project]); ?>&&size=<?php echo ($get[size]); ?>&&method=<?php echo ($get[method]); ?>&&sales=<?php echo ($get[sales]); ?>&&invcontent=<?php echo ($get[invcontent]); ?>&&vatspecialinv=<?php echo ($get[vatspecialinv]); ?>&&territory=<?php echo ($get[territory]); ?>&&copy=<?php echo ($get[copy]); ?>&&search=<?php echo ($get[search]); ?>">view 100 results</a>
										</li>
										<li>
											<a href="<?php echo U('User/Browsing');?>?view=200&&account=<?php echo ($get[account]); ?>&&project=<?php echo ($get[project]); ?>&&size=<?php echo ($get[size]); ?>&&method=<?php echo ($get[method]); ?>&&sales=<?php echo ($get[sales]); ?>&&invcontent=<?php echo ($get[invcontent]); ?>&&vatspecialinv=<?php echo ($get[vatspecialinv]); ?>&&territory=<?php echo ($get[territory]); ?>&&copy=<?php echo ($get[copy]); ?>&&search=<?php echo ($get[search]); ?>">view 200 results</a>
										</li>
					                </ul>
		               			 </div>
			                </td>
			                <!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;<?php echo ($page); ?></td>-->
			                <td bgcolor="#FFFFFF">
			                	<div class="pages">
			                        <?php echo ($page); ?>
			                	</div>
			                </td>  
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
    <script type="text/javascript" src="/thatsweb/thatsproj/bcs2/Public/js/sweetalert.min.js"></script>
    <script type="text/javascript">
    	function del(id){
			swal({   
					title: "Are you sure to delete?",   
					text: "",  
					type: "warning",  
					showCancelButton: true,   
				    confirmButtonColor: "#DD6B55",   
				    confirmButtonText: "Yes, remove it!",   
				    closeOnConfirm: false 
				}, function(){  
					$.post("<?php echo U('Information/delete');?>?id="+id,function(data){
						if(data == "true"){
							swal({
									title: "Delete successfully!",   
									text: "",
									type: "success",   
									timer: 1000,   
									showConfirmButton: false
								 },function(){
								 	location.reload();
								 }
								); 
						}
					});
					
				});
		}
    </script>
  </body>
</html>