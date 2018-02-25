<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MusicBox</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="admin/css/skins/skin-blue.min.css">
        <?php echo $__env->yieldContent('css'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo e(url('/ad')); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="fa fa-youtube-play"></span>
            <!-- logo for regular state and mobile devices -->
            <span class=""><b>Music</b>BOX</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="admin/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">

                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="<?php echo e(url('/ad')); ?>"><i class="fa fa-fw fa-list"></i> <span>Products</span></a></li>
                <li><a href="<?php echo e(url('/addProd')); ?>"><i class="fa fa-fw fa-plus-square"></i> <span>Add Product</span></a></li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Products
            </h1>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List of Products</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Product Name: activate to sort column ascending" style="width: 217px;">Product Name	</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Product Type: activate to sort column ascending" style="width: 267.4px;">Product Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Product Description: activate to sort column ascending" style="width: 237px;">Product Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Product Price: activate to sort column ascending" style="width: 186.6px;">Product Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                            aria-label="Product Image: activate to sort column ascending" style="width: 135.6px;">Product Image</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Cheese Burger</td>
                                        <td>Burger</td>
                                        <td>Burger with cheese</td>
                                        <td>7.7 $</td>
                                        <td>yyyyyy</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Pepperoni Pizza</td>
                                        <td>Pizza</td>
                                        <td>Pizza with Pepperoni</td>
                                        <td>10 $</td>
                                        <td>wwww</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Salade Cesar</td>
                                        <td>Salad</td>
                                        <td>Salad with lots of ingredients</td>
                                        <td>9 $</td>
                                        <td>qqqqqq</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Pepsi</td>
                                        <td>Drinks</td>
                                        <td>Soda</td>
                                        <td>1.9 $</td>
                                        <td>iiiiii</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Tiramissu</td>
                                        <td>Desserts</td>
                                        <td>gateau glacé</td>
                                        <td>5.8 $</td>
                                        <td>ppppp</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ice Tea</td>
                                        <td>Drinks</td>
                                        <td>cold Tea</td>
                                        <td>3.8 $</td>
                                        <td>tttttt</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Pizza Neptune</td>
                                        <td>Pizza</td>
                                        <td>Simple pizza</td>
                                        <td>9.75 $</td>
                                        <td>uuuuuuu</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Caramel Cheesecake</td>
                                        <td>Desserts</td>
                                        <td>Cheesecake avec du caramel ...</td>
                                        <td>7.7 $</td>
                                        <td>xxxx</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Ice Tea</td>
                                        <td>Drinks</td>
                                        <td>cold Tea</td>
                                        <td>3.8 $</td>
                                        <td>tttttt</td>
                                    </tr><tr role="row" class="odd">
                                        <td class="sorting_1">Pizza Neptune</td>
                                        <td>Pizza</td>
                                        <td>Simple pizza</td>
                                        <td>9.75 $</td>
                                        <td>uuuuuuu</td>
                                    </tr><tr role="row" class="even">
                                        <td class="sorting_1">Caramel Cheesecake</td>
                                        <td>Desserts</td>
                                        <td>Cheesecake avec du caramel ...</td>
                                        <td>7.7 $</td>
                                        <td>xxxx</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr><th rowspan="1" colspan="1">Product Name</th>
                                        <th rowspan="1" colspan="1">Product Type</th>
                                        <th rowspan="1" colspan="1">Product Description</th>
                                        <th rowspan="1" colspan="1">Product Price</th>
                                        <th rowspan="1" colspan="1">Product Image</th></tr>
                                    </tfoot>
                                </table></div></div>

                    </div>
                </div>
                <!-- /.box-body -->

        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
            <?php echo $__env->yieldContent('main'); ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin/js/adminlte.min.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
<?php echo $__env->yieldContent('js'); ?>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>