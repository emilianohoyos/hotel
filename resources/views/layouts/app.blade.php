<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>Hotel Medellin Comfort </title>
    <!-- Bootstrap -->


    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Styles -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'> -->
    <link href="/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- <link href="/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/> -->
    <link href="/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Theme Styles -->
    <link href="/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>

<!-- Datatables -->

     <!-- DataTables CSS -->
    <link href="/css/datatables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/css/datatables/dataTables.responsive.css" rel="stylesheet">


    <script src="/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="/assets/js/Chart.bundle.min.js"></script>
    <script src="/assets/js/utils.js"></script>
    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .page-header-fixed .navbar {
        position: absolute !important;
    }
    .btn-primary{
    background-color: #22BAA0 !important;
    }

    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="page-header-fixed compact-menu page-horizontal-bar" >
    <div class="overlay"></div>

    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner container">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">

                    <a href="/" class="logo-text"><span>Hotel Medellin Comfort</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                         <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-search"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                            </li>
                        </ul> 
                          <ul class="nav navbar-nav navbar-right">

                                <ul class="dropdown-menu dropdown-list" role="menu">

                            </li>
                        </ul> <!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div>
        <div class="page-inner">
            <div class="page-breadcrumb">
            </div>
           <!-- <div class="page-title">
                <div class="container">
                    <h3>Resultados de Búsqueda</h3>
                </div>
            </div> -->
            <div id="main-wrapper" class="container">
                @yield("content")
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <div class="container">
                    <p class="no-s"><?php echo date('Y') ?> &copy; Hotel Medellin Comfort.</p>
                </div>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

    <div class="cd-overlay"></div>


    <!-- Javascripts -->
    <script src="/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/plugins/pace-master/pace.min.js"></script>
    <script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/plugins/switchery/switchery.min.js"></script>
    <script src="/assets/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="/assets/plugins/classie/classie.js"></script>
    <script src="/assets/plugins/waves/waves.min.js"></script>
    <script src="/assets/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="/assets/js/modern.min.js"></script>



    <!--datatables -->




  <!-- jQuery -->
   <!-- <script src="/assets/js/datatables/jquery.min.js"></script>  -->
  

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/assets/js/datatables/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/js/datatables/dataTables.bootstrap.min.js"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>


    <script type="text/javascript">
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                }
            });


    </script>




    @yield("script")

</body>
</html>
