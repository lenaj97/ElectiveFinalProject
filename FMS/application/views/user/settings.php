<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini" >
    <!-- Site wrapper -->
    <div id="loading">
        <img class="img-responsive" src="<?php echo resource_url("img/loading-files.gif"); ?>" alt="loading" />
        <h3 class="loading-msg">Kicking @ss..</h3>
    </div>
    <div class="wrapper" id="page-content">
        <header class="main-header">
        <!-- Logo -->
            <a href="<?php echo base_url('user/settings');?>" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img class="img-responsive" src="<?php echo resource_url("img/logo.png"); ?>" alt="logo" />
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Ω<b>MEGA</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">         
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-search"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <form action="#" method="get" >
                                    <div class="input-group">
                                        <input type="text" name="q" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </ul>
                        </li>
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?php echo resource_url('img/avatar.png')?>" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <img src="<?php echo resource_url('img/avatar.png')?>" class="user-image" alt="User Image">
                          <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo resource_url('img/avatar.png')?>" class="img-circle" alt="User Image">
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li>
                        <a href="<?php echo base_url("user/dashboard");?>">
                            <i class="fa fa-clipboard fa-lg"></i> 
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("user/home");?>">
                            <i class="fa fa-cloud fa-lg"></i>
                            <span>Cloud Drive</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-recycle fa-lg"></i> 
                            <span>Rubbish Bin</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-feed fa-lg"></i> 
                            <span>Feedback</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('user/settings');?>">
                            <i class="fa fa-gears fa-lg"></i> 
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="col-sm-2 file-tree">
                <div class="page-title">
                    <p>Settings</p>
                </div>
                <div class="dashboard-user">
					<img src="<?php echo resource_url('img/avatar.png')?>" class="img-circle img-responsive dashboard-img" alt="User Image">
                </div>
				<center><h3>Alexander Pierce</h3></center>
				<center><h5>alexpierce@ymail.com</h5></center></br>
				
				<div>
					<ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><i class="fa fa-fw fa-user fa-2x"></i> Account</a></li>
                        <li><a href="#"><i class="fa fa-clock-o fa-2x"></i> History</a></li>
                        <li><a href="#"><i class="fa  fa-bell-o fa-2x"></i> Notifications</a></li>
                        <li><a href="#"><i class="fa  fa-wrench fa-2x"></i> Advanced</a></li>
                    </ul>
				</div>
            </div>
			<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2">
			<div class="filemanager">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs tab-nav-right" role="tablist">
									<li role="presentation" class="active"><a href="#general" data-toggle="tab">GENERAL</a></li>
									<li role="presentation"><a href="#email" data-toggle="tab">EMAIL and PASSWORD</a></li>
									<li role="presentation"><a href="#payment" data-toggle="tab">PAYMENT and PLAN</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="general">
										<div class="container-fluid">
										<h3>Personal Information</h3>
											<div class="box-body">
												<form class="form-horizontal">
													<div class="form-group">
														<label class="col-sm-3" for="FN">First Name*</label>
														<div class="col-sm-3">
														<input type="text" value="Alexander" class="form-control" /></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="LN">Last Name</label>
														<div class="col-sm-3">
														<input type="text" value="Pierce" class="form-control" /></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="BD">Birthdate</label>
														<div class="col-sm-3">
															<input type="date" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="CT">Country</label>
														<div class="col-sm-3">
															<select class="form-control">
																<option>Philippines</option>
																<option>Afghanistan</option>
																<option>Bahamas</option>
																<option>Cambodia</option>
																<option>Denmark</option>
																<option>Ecuador</option>
																<option>Fiji</option>
																<option>Gabon</option>
																<option>Haiti</option>
															</select>
														</div>
													</div>
												</form>
											</div>
										</div>
										<div class="container-fluid">
										<h3>Account Type:</h3>
											<div class="box-body">
												<form class="form-horizontal">
													<div class="form-group">
														<label class="col-sm-3" for="PL">Plan</label>
														<div class="col-sm-3">
														<p>FREE</p></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="SS">Storage Space</label>
														<div class="col-sm-3">
														<p>50 GB</p></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="RO">Renews On</label>
														<div class="col-sm-3">
														<p>No Billing Cycle</p></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="UA"></label>
														<div class="col-sm-2">
														<button type="submit" class="btn btn-default btn-block">Upgrade Account</button></div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="email">
										<div class="container-fluid">
										<h3>Change Password</h3>
											<div class="box-body">
												<form class="form-horizontal">
													<div class="form-group">
														<label class="col-sm-3" for="CP">Current Password</label>
														<div class="col-sm-3">
														<input type="password" class="form-control" /></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="NP">New Password</label>
														<div class="col-sm-3">
														<input type="password" class="form-control" /></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="CNP">Confirm New Password</label>
														<div class="col-sm-3">
															<input type="password" class="form-control">
														</div>
													</div>
												</form>
											</div>
										<h3>Change Email</h3>
											<div class="box-body">
												<form class="form-horizontal">
													<div class="form-group">
														<label class="col-sm-3" for="CE">Current Email</label>
														<div class="col-sm-3">
														<input type="email" value="alexpierce@ymail.com" class="form-control" /></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="NE">New Email</label>
														<div class="col-sm-3">
														<input type="email" class="form-control" /></div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="payment">
										<div class="container-fluid">
										<h3>Account Type:</h3>
											<div class="box-body">
												<form class="form-horizontal">
													<div class="form-group">
														<label class="col-sm-3" for="PL">Plan</label>
														<div class="col-sm-3">
														<p>FREE</p></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="SS">Storage Space</label>
														<div class="col-sm-3">
														<p>50 GB</p></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="RO">Renews On</label>
														<div class="col-sm-3">
														<p>No Billing Cycle</p></div>
													</div>
													<div class="form-group">
														<label class="col-sm-3" for="UA"></label>
														<div class="col-sm-2">
														<button type="submit" class="btn btn-default btn-block">Upgrade Account</button></div>
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
        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">

        </footer>

    </div>
    <!-- ./wrapper -->

</body>
