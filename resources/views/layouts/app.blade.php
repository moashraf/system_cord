<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{  asset('/') }}bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  asset('/') }}bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{  asset('/') }}bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{  asset('/') }}dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{  asset('/') }}dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{  asset('/') }}bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{  asset('/') }}bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{  asset('/') }}bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{  asset('/') }}bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{  asset('/') }}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  	<script src="{{  asset('/ckeditor') }}/ckeditor.js"></script>
 
  	<script src="{{  asset('/ckeditor') }}/samples/js/sample.js"></script>
	<link rel="stylesheet" href="{{  asset('/ckeditor') }}/samples/toolbarconfigurator/lib/codemirror/neo.css">
	
	


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

     
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
 <img src=" https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg " class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">

                <p> <?php $user = auth()->user()->name;   echo$user ;   ?>          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		
		
		
				        <li><a href="https://corddigital.com/site/admin/siteStings"><i class="fa fa-circle-o text-yellow"></i> <span>Site Stings   </span></a></li>


  <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  		        <li><a href="https://corddigital.com/site/admin/sliders"><i class="fa fa-circle-o "></i> <span> slider     </span></a></li>
		  		        <li><a href="https://corddigital.com/site/admin/siteStings/112/edit"><i class="fa fa-circle-o "></i> <span>  Why cord digital 1   </span></a></li>
		  		        <li><a href="https://corddigital.com/site/admin/siteStings/113/edit"><i class="fa fa-circle-o "></i> <span>  Why cord digital 2  </span></a></li>
		  		        <li><a href="https://corddigital.com/site/admin/categories_news_single/5"><i class="fa fa-circle-o "></i> <span> Testimonials</span></a></li>

 							 
           </ul>
        </li>
		

  <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span> Company </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="https://corddigital.com/site/admin/siteStings/34/edit"><i class="fa fa-circle-o"></i> Overview   </a></li>
            <li><a href="https://corddigital.com/site/admin/siteStings/111/edit"><i class="fa fa-circle-o"></i>   We believe     </a></li>
            <li><a href="https://corddigital.com/site/admin/siteStings/97/edit"><i class="fa fa-circle-o"></i>   Vision    </a></li>
            <li><a href="https://corddigital.com/site/admin/siteStings/96/edit"><i class="fa fa-circle-o"></i>   Mission  </a></li>
	   <li><a href="https://corddigital.com/site/admin/categories_news_single/4"><i class="fa fa-circle-o "></i> <span> Clients</span></a></li>
	   <li><a href="https://corddigital.com/site/admin/categories_news_single/2"><i class="fa fa-circle-o "></i> <span> Our Board</span></a></li>

           </ul>
        </li>
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>
							Methodology   </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                                
							
            <li><a href="https://corddigital.com/site/admin/categories_news_single/34"><i class="fa fa-circle-o"></i> all Methodology   </a></li>  
            </ul>
        </li>
		
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>
							Services  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                                
							
            <li><a href="https://corddigital.com/site/admin/categories_news_single/30"><i class="fa fa-circle-o"></i>  Digital Marketing </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/31"><i class="fa fa-circle-o"></i>   Web &amp; App Solutions      </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/33"><i class="fa fa-circle-o"></i>  Graphics &amp; Photography     </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/32"><i class="fa fa-circle-o"></i> Video &amp; Multimedia     </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/49"><i class="fa fa-circle-o"></i> 	Outsourcing &amp; Franchising     </a></li>
           </ul>
        </li>
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>
							 
							Packages     </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                                
							
            <li><a href="https://corddigital.com/site/admin/categories_news_single/48"><i class="fa fa-circle-o"></i> Social Media  Packages     </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/51"><i class="fa fa-circle-o"></i> Pay Per Click  Packages       </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/37"><i class="fa fa-circle-o"></i>  SEO Packages       </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/38"><i class="fa fa-circle-o"></i>   Web Packages       </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/41"><i class="fa fa-circle-o"></i> 	 Mobile application         </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/40"><i class="fa fa-circle-o"></i> 	 Graphics & Photography         </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/39"><i class="fa fa-circle-o"></i>  Video & Multimedia Packages       </a></li>
            </ul>
        </li>
		
		
			
		   <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>
							Portfolio   </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                                
							
            <li><a href="https://corddigital.com/site/admin/categories_news_single/43"><i class="fa fa-circle-o"></i>   Social Media  Portfolio    </a></li> 
            <li><a href="https://corddigital.com/site/admin/categories_news_single/54"><i class="fa fa-circle-o"></i>     PPC portfolio     </a></li> 
            <li><a href="https://corddigital.com/site/admin/categories_news_single/50"><i class="fa fa-circle-o"></i>    SEO portfolio   </a></li> 
            <li><a href="https://corddigital.com/site/admin/categories_news_single/44"><i class="fa fa-circle-o"></i>       Web Development     </a></li> 
            <li><a href="https://corddigital.com/site/admin/categories_news_single/55"><i class="fa fa-circle-o"></i>     Mobile Application     </a></li> 
            <li><a href="https://corddigital.com/site/admin/categories_news_single/45"><i class="fa fa-circle-o"></i>      Graphics & Photography    </a></li> 
            <li><a href="https://corddigital.com/site/admin/categories_news_single/46"><i class="fa fa-circle-o"></i>    Video & Multimedia     </a></li> 
            <li><a href="https://corddigital.com/site/admin/categories_news_single/47"><i class="fa fa-circle-o"></i>      Outsourcing-Franchising     </a></li> 
            </ul>
        </li>
		
		
		  
		
		
		
		
			 
			 
		
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="https://corddigital.com/site/admin/categories_news_single/3"><i class="fa fa-circle-o"></i>  Cord News  </a></li>
            <li><a href="https://corddigital.com/site/admin/categories_news_single/1"><i class="fa fa-circle-o"></i>    
								Marketing News    </a></li>
           </ul>
        </li>
       
		
		
	
							 				  
		
		
		
		
		
		
		
		
		
		
		        <li><a href="https://corddigital.com/site/admin/sup "><i class="fa fa-circle-o text-yellow"></i> <span>All post </span></a></li>
		        <li><a href="https://corddigital.com/site/admin/categoriesNews "><i class="fa fa-circle-o text-yellow"></i> <span>All page </span></a></li>
		        <li><a href="https://corddigital.com/site/admin/orders"><i class="fa fa-circle-o text-yellow"></i> <span>All  orders  </span></a></li>
 		        <li><a href="https://corddigital.com/site/admin/system"><i class="fa fa-circle-o text-yellow"></i> <span>  System     </span></a></li>

		
		 
		
		
		
		
		
	   </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


         @yield('content')	
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
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

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
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

<!-- jQuery 3 -->
<script src="{{  asset('/') }}bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{  asset('/') }}bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{  asset('/') }}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{  asset('/') }}bower_components/raphael/raphael.min.js"></script>
<script src="{{  asset('/') }}bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{  asset('/') }}bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{  asset('/') }}plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{  asset('/') }}plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{  asset('/') }}bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{  asset('/') }}bower_components/moment/min/moment.min.js"></script>
<script src="{{  asset('/') }}bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{  asset('/') }}bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{  asset('/') }}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{  asset('/') }}bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{  asset('/') }}bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
 
<script src="{{  asset('/') }}dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{  asset('/') }}dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{  asset('/') }}dist/js/demo.js"></script>






  <script>
  $(function () {
  
 
    //Datemask2 mm/dd/yyyy
     //Money Euro
 
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

 
 
    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<script>
editor.dataProcessor.htmlFilter.addRules(
{
    elements :
    {
        a : function( element )
        {
            if ( !element.attributes.rel )
                element.attributes.rel = 'nofollow';
        }
    }
});
    </script>
</body>
</html>
