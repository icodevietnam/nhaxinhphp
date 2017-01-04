<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php
    echo $meta;//place to pass data / plugable hook zone
    Assets::css([
        Url::consolePath().'bootstrap/css/bootstrap.min.css',
        Url::consolePath().'font-awesome/css/font-awesome.min.css',
        Url::consolePath().'icon/css/icon.min.css',
        Url::consolePath().'dist/css/AdminLTE.min.css',
        Url::consolePath().'dist/css/skins/_all-skins.min.css',
        Url::consolePath().'plugins/iCheck/flat/blue.css',
        Url::consolePath().'plugins/datatables/jquery.dataTables.min.css',
        Url::consolePath().'plugins/datatables/dataTables.bootstrap.css',
        Url::consolePath().'plugins/morris/morris.css',
        Url::consolePath().'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        Url::consolePath().'plugins/datepicker/datepicker3.css',
        Url::consolePath().'plugins/daterangepicker/daterangepicker.css',
        Url::consolePath().'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        Url::consolePath().'css/style.css',
    ]);
    echo $css; //place to pass data / plugable hook zone
    ?>

    <?php
    Assets::js([
        Url::consolePath().'plugins/jQuery/jquery-2.2.3.min.js',
        Url::consolePath().'plugins/jQueryUI/jquery-ui.min.js',
        Url::consolePath().'bootstrap/js/bootstrap.min.js',
        Url::consolePath().'plugins/raphael/raphael.min.js',
        //Url::consolePath().'plugins/morris/morris.min.js',
        Url::consolePath().'plugins/sparkline/jquery.sparkline.min.js',
        Url::consolePath().'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        Url::consolePath().'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        Url::consolePath().'plugins/knob/jquery.knob.js',
        Url::consolePath().'plugins/moment/moment.min.js',
        Url::consolePath().'plugins/daterangepicker/daterangepicker.js',
        Url::consolePath().'plugins/datepicker/bootstrap-datepicker.js',
        Url::consolePath().'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        Url::consolePath().'plugins/slimScroll/jquery.slimscroll.min.js',
        Url::consolePath().'plugins/fastclick/fastclick.js',
        Url::consolePath().'plugins/datatables/jquery.dataTables.min.js',
        Url::consolePath().'plugins/datatables/dataTables.bootstrap.min.js',
        Url::consolePath().'dist/js/app.min.js'
    ]);
  ?>

  <script>
    var CONSOLE_DIR = '<?= DIR ?>';
  </script>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}\
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Casa Funiture</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= Url::consolePath() ?>img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= Session::get('admin')->firstname ?> <?= Session::get('admin')->lastname ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= Url::consolePath() ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?= Session::get('admin')->firstname ?> <?= Session::get('admin')->lastname ?>
                  <small>Member since <?= Session::get('admin')->created_date ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Thông tin</a>
                </div>
                <div class="pull-right">
                  <a href="<?= DIR.'logout' ?>" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= Url::consolePath() ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?= Session::get('admin')->firstname ?> <?= Session::get('admin')->lastname ?> </p>
          <a><i class="fa fa-circle text-success"></i> <?= Session::get('token') != null ? 'Online' : 'Offline' ?></a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">v
        <li class="header"> Mục lục chính </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tổng hợp</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?= ADMIN_DIR ?>dashboard-product"><i class="fa fa-circle-o"></i> Tổng hợp sản phẩm</a></li>
            <li><a href="<?= ADMIN_DIR ?>dashboard-user""><i class="fa fa-circle-o"></i> Tổng hợp người dùng </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Quản lý Người dùng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Người dùng </a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Vai trò </a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Quyền </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Quản lý sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Mục lục </a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Chuyên mục con </a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Sản phẩm </a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper" style="min-height: 916px;">