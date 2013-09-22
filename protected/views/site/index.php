<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wbpreview.com/previews/WB01BG165/ by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 16 May 2013 12:36:58 GMT -->
<head>
	<meta charset="utf-8">
    <title>Alveolae - Admin Dashboard</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <!-- CSS files-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/alveolae.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	

</head>
<script type="text/javascript">  
function currentTime(){  
var d = new Date(),str = '';  
str += d.getFullYear()+'年';  
str  += d.getMonth() + 1+'月';  
str  += d.getDate()+'日';  
str += d.getHours()+'时';  
str  += d.getMinutes()+'分';  
str+= d.getSeconds()+'秒';  
return str;  
}  
setInterval(function(){$('#time').html(currentTime)},1000);  
</script> 

<body>
	<!-- Navbar -->
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="index-2.html">Alveolae Dashboard</a>
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<li class="divider-vertical"></li>
						<li><a href="messages.html"><i class="icon-comments-alt"></i>&nbsp;&nbsp;Messages&nbsp;&nbsp;<span class="label label-important">4 new</span></a></li>
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-bullhorn"></i>&nbsp;&nbsp;Latest activity&nbsp;&nbsp;<span class="label label-important">6</span></a>
							<ul class="dropdown-menu">
                            	<li><a href="#"><i class="icon-comment"></i>New comment<span class="time">24 mins ago</span></a></li>
                            	<li><a href="#"><i class="icon-envelope-alt"></i>New message<span class="time">50 mins ago</span></a></li>
								<li><a href="#"><i class="icon-user"></i>User registration<span class="time">17 hours ago</span></a></li>
								<li><a href="#"><i class="icon-lock"></i>User logged in<span class="time">1 day ago</span></a></li>
                                <li><a href="#"><i class="icon-lock"></i>User signed in<span class="time">2 days ago</span></a></li>
								<li><a href="#"><i class="icon-trash"></i>User deleted account<span class="time">5 days ago</span></a></li>
                                <li><hr><a class="dropdown-menu-footer">
                                	<span class="footer"><i class="icon-eye-open"></i>&nbsp;&nbsp;View all activity</span></a>
                                </li>	
							</ul>
						</li>
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-cloud"></i>&nbsp;&nbsp;Admin<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="user-account.html"><i class="icon-file"></i>&nbsp;&nbsp;User information</a></li>
								<li><a href="password.html"><i class="icon-key"></i>&nbsp;&nbsp;Change Password</a></li>
							</ul>
						</li>
						<li class="divider-vertical"></li>
						<li><a href="login.html"><i class="icon-lock"></i>&nbsp;&nbsp;Logout</a></li>
						<li class="divider-vertical"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /Navbar -->

	<!-- Main content -->
	<div id="main-content">
		<!-- Container -->
		<div class="container">
			<!-- Header boxes -->
			<div class="box-container">
				<div class="box-holder1">
					<div class="box">
                                            <table width="400px">
                                                <tr>
                                                    <td width="32%"><strong>等级/天赋</strong></td>
                                                    <td width="68%"><?php $level=105;echo $level;?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php $talent=1;echo $talent;?></td>
                                                    
                                                </tr>
                                                 <tr>
                                                    <td width="16%"><strong>经验</strong></td>
                                                    <td width="84%"><?php $this->widget('zii.widgets.jui.CJuiProgressBar', array(
                                                                    'value'=>33,                                           
                                                                    // additional javascript options for the progress bar plugin
                                                                    'options'=>array(
                        //                                                 'change'=>'js:function(event, ui) {...}',
                                                                    ),
                                                                    'htmlOptions'=>array(
                                                                        'style'=>'height:12px;'
                                                                    ),
                                                                ));?>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td width="16%"><strong>体力</strong></td>
                                                    <td width="84%"><?php $this->widget('zii.widgets.jui.CJuiProgressBar', array(
                                                                    'value'=>78,                                           
                                                                    // additional javascript options for the progress bar plugin
                                                                    'options'=>array(
                        //                                                 'change'=>'js:function(event, ui) {...}',
                                                                    ),
                                                                    'htmlOptions'=>array(
                                                                        'style'=>'height:12px;'
                                                                    ),
                                                                ));?>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!--<div class="span1x"><strong>经验</strong></div>-->
                                            <!--<div class="span3x">-->
                                               
                                        <!--</div>-->
                                           <tr><td></td></tr>
                                           <tr><td></td></tr>
                                       </div>
                                </div>
				<div class="box-holder2">						
					<div class="box">
                                            <table width="400px">
                                                <tr>
                                                    <td width="400"><div align="middle"><div id="time">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></div></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
				</div>
                            
                        
				<div class="box-holder3">						
					<div class="box">
                                            <table width="200px">
                                                <tr>
                                                    <td width="32%"><strong>符石：</strong></td>
                                                    <td width="68%"><?php $stone=8888;echo $stone;?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td width="32%"><strong>金币：</strong></td>
                                                    <td width="68%"><?php $golden=12345678;echo $golden;?></td>                                                    
                                                </tr>
                                            </table>
                                        </div>
				</div>
			</div>
			<!-- /Header boxes -->
			
			<div class="row">
				<!-- Sidebar -->
				<div class="span3">
					<ul id="sidebar" class="nav nav-tabs nav-stacked">
						<li class="active"><a href="index-2.html"><i class="icon-dashboard"></i>&nbsp;&nbsp;Main dashboard view</a></li>
						<li><a href="grid.html"><i class="icon-th-large"></i>&nbsp;&nbsp;Grid Layout</a></li>
						<li><a href="tables.html"><i class="icon-table"></i>&nbsp;&nbsp;Tables</a></li>
						<li><a href="messages.html"><i class="icon-comments-alt"></i>&nbsp;&nbsp;Messages<span class="label label-success pull-right">New!</span></a></li>
						<li><a href="news.html"><i class="icon-globe"></i>&nbsp;&nbsp;News<span class="label label-success pull-right">6</span></a></li>
						<li><a href="products.html"><i class="icon-truck"></i>&nbsp;&nbsp;Products<span class="label label-success pull-right">3</span></a></li>
						<li><a href="alerts.html"><i class="icon-bolt"></i>&nbsp;&nbsp;Alerts</a></li>
						<li><a href="gallery.html"><i class="icon-camera-retro"></i>&nbsp;&nbsp;Gallery</a></li>
						<li><a href="faqs.html"><i class="icon-legal"></i>&nbsp;&nbsp;FAQ</a></li>
						<li><a href="user-account.html"><i class="icon-user"></i>&nbsp;&nbsp;User information</a></li>
						<li class="accordion">
							<a href="#collapse-additional-info" class="accordion-toggle" data-toggle="collapse" data-parent="navigation-components">
								<i class="icon-list-ul"></i>&nbsp;&nbsp;More info
								<span class="label label-success pull-right">Click me!</span>
							</a>
							<div id="collapse-additional-info" class="accordion-body collapse">
								<div class="sidebar-extra well">
									You can add more information here.
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- /Sidebar -->

				<!-- Content -->
				<div class="span9">
					<h1 class="page-title">Control panel overview</h1>
					
					<div class="box-container">
						<div class="box-holder">
							<a href="#"><div class="box"><span>216</span>Views</div></a>
						</div>
						
						<div class="box-holder">						
							<a href="#"><div class="box"><span>34</span>Messages</div></a>
						</div>
						
						<div class="box-holder">						
							<a href="#"><div class="box"><span>58</span>Open tickets</div></a>
						</div>
						
						<div class="box-holder">						
							<a href="#"><div class="box"><span>79</span>Invoices</div></a>
						</div>
					</div>

					<div class="widget">
						<div class="widget-header">
							<h3><i class="icon-tag"></i>&nbsp;&nbsp;Badges</h3>
						</div>
						<div class="widget-content">
							<div class="box-container">
								<div class="box-holder">
									<a href="#"><div class="box-img"><img src="http://placehold.it/120x120" class="img-circle" alt="badge1"></div></a>
								</div>
								
								<div class="box-holder">						
									<a href="#"><div class="box-img"><img src="http://placehold.it/120x120" class="img-circle" alt="badge2"></div></a>
								</div>
								
								<div class="box-holder">						
									<a href="#"><div class="box-img"><img src="http://placehold.it/120x120" class="img-circle" alt="badge3"></div></a>
								</div>
								
								<div class="box-holder">						
									<a href="#"><div class="box-img"><img src="http://placehold.it/120x120" class="img-circle" alt="badge4"></div></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="widget">
						<div class="widget-header">
							<h3><i class="icon-globe"></i>&nbsp;&nbsp;Usage of web browsers</h3>
						</div>
						<div class="widget-content">
							<strong>Chrome</strong><span class="pull-right">70%</span>
							<div class="progress progress-danger active">
							  <div class="bar" style="width: 70%;"></div>
							</div>
							<strong>Firefox</strong><span class="pull-right">60%</span>
							<div class="progress progress-info active">
							  <div class="bar" style="width: 60%;"></div>
							</div>
							<strong>Safari</strong><span class="pull-right">30%</span>
							<div class="progress progress-striped active">
							  <div class="bar" style="width: 30%;"></div>
							</div>
							<strong>Opera</strong><span class="pull-right">15%</span>
							<div class="progress progress-success active">
							  <div class="bar" style="width: 15%;"></div>
							</div>
							<strong>Others</strong><span class="pull-right">10%</span>
							<div class="progress progress-warning active">
							  <div class="bar" style="width: 10%;"></div>
							</div>
							<p>
							<a href="#" class="pull-right">View detailed results</a>
							</p>
						</div>
					</div>
				</div>
				<!-- /Content -->
			</div>

			<!-- Footer -->
			<div id="footer">
				<hr>
				<p class="pull-right">Company name &copy; 2012</p>
			</div>
			<!-- /Footer -->
	
		</div>
		<!-- /Container -->
	</div>
	<!-- /Main content -->

	<!-- Javascript files -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
</body>

<!-- Mirrored from wbpreview.com/previews/WB01BG165/ by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 16 May 2013 12:37:07 GMT -->
</html>

