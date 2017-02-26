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
                        <a href="#">
                            <i class="fa fa-clipboard fa-lg"></i> 
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
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
            <div class="col-sm-2 file-tree">
                <div class="page-title">
                    <p>Cloud Drive</p>
                </div>
                <div class="tree">                
                    <ul class="list-unstyled">
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Folder</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            
                            <ul class="treeview-menu list-unstyled">
                                <li><a href="#"><i class="fa fa-folder"></i> Subfolder1</a></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-folder"></i> Subfolder2
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu list-unstyled">
                                        <li><a href="#"><i class="fa fa-folder"></i> Subfolder3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>                
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2">
                <div class="filemanager">
                    <section class="content-header">
                        <ol class="breadcrumb">
                            <li class="active"><a href=""><i class="fa fa-cloud"></i></a></li>
                        </ol>
                        <div class="menu-list">
                            <span> <i class="fa fa-plus"></i> New Folder</span>
                            <span> <i class="glyphicon glyphicon-open-file"></i> File Upload</span>
                            <span> <i class="fa fa-cloud-upload"></i> Folder Upload</span>
                            <div class="view-options">
                                <span class="fa fa-th-list"></span>
                                <span class="fa fa-th"></span>
                            </div>                            
                        </div>                      
                    </section>
                    <ul class="data animated">
                        <li class="folders">
                            <a href="" class="folders">
                                <span class="icon folder full"></span>
                                <span class="name">sample</span>
                                <span class="details">3 items</span>
                            </a>
                        </li>
                        <li class="folders">
                            <a href="" class="folders">
                                <span class="icon folder full"></span>
                                <span class="name">Folder</span>
                                <span class="details">3 items</span>
                            </a>
                        </li>
                        <li class="files">
                            <a href="" class="files">
                                <span class="icon file f-txt">.txt</span>
                                <span class="name">File</span>
                                <span class="details">4 GB</span>
                            </a>
                        </li>
                        <li class="files">
                            <a href="" class="files">
                                <span class="icon file f-pdf">.pdf</span>
                                <span class="name">File</span>
                                <span class="details">2 GB</span>
                            </a>
                        </li>
                        <li class="files">
                            <a href="" class="files">
                                <span class="icon file f-css">.css</span>
                                <span class="name">File</span>
                                <span class="details">34 KB</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">

        </footer>

    </div>
    <!-- ./wrapper -->

</body>
