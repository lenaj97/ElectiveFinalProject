<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini" >
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
        <!-- Logo -->
            <a href="<?php echo base_url('user/home');?>" class="logo">
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
                          <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
                        </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo resource_url('img/avatar.png')?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $_SESSION['username']; ?>
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
                    <li class="active">
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
                    <li>
                        <a href="#">
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
            <!-- Content Header (Page header) -->
            <section class="content-header">
				<h5 class="h5">Dashboard</h5>
            </section>

            <!-- Main content -->
            <section class="content">
				<div class="col-md-12">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 prof">
						<div class="pull-left">
                            <div class="dashboard-user">
                                <img src="<?php echo resource_url('img/ava3.png')?>" class="img-responsive dashboard-img" alt="User Image">
                            </div>
							<div class="info">
								<h5 class="h5">Alexander Pierce</h5>
								<h5>Alexanderpierce@gmail.com</h5>
							</div>
							</br>
							<div>
								<h5 class="h5">MEMBER SINCE:</h5>
							</div>
							<div class="info">
								<h5>12 October 2017</h5>
							</div>
                        </div>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<img src="<?php echo resource_url('img/dash.png')?>" alt="User Image" class="img-responsive"></br></br>
						<img src="<?php echo resource_url('img/dash1.png')?>" alt="User Image" class="img-responsive">
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<img src="<?php echo resource_url('img/dash2.png')?>" alt="User Image" class="img-responsive"></br></br>
					</div>
				</div>
            </section>
        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">

        </footer>

    </div>
    <!-- ./wrapper -->

</body>
