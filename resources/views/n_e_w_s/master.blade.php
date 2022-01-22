<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> 
                                                <?php $locale =\Request::segment(3) ; if($locale=='Domains_Servers' ){echo 'Domains And Servers ';}else{} ?>
                                                
                                                 <?php $locale =\Request::segment(3) ; if($locale=='monthlyAccDisplay' ){echo 'Monthly Account ';}else{} ?> 
                                                 
                                                 <?php $locale =\Request::segment(3) ; if($locale=='OneTime' ){echo 'One Time';}else{} ?> 
                                                 
                                                  <?php $locale =\Request::segment(3) ; if($locale=='sales' ){echo 'Sales';}else{} ?>
                                                   </title>
    <link rel="icon" type="image/x-icon" href="assets/img/fav.png"/>
    <link href="{{  asset('new_d/') }}/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{  asset('new_d/') }}/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{  asset('new_d/') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{  asset('new_d/') }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{  asset('new_d/') }}/assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->
            <link href="{{  asset('new_d/') }}/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{  asset('new_d/') }}/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" class="dashboard-analytics" />
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{  asset('new_d/') }}/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{  asset('new_d/') }}/plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="{{  asset('new_d/') }}/plugins/table/datatable/dt-global_style.css">
    <link href="{{  asset('new_d/') }}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

    
    
    
    






    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>
<body class="sidebar-noneoverflow admin-header">
    
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <div class="theme-logo">
                <a href="#">
                    <img src=" https://corddigital.com/images/cord-resize-logo.png " class="navbar-logo222" alt="logo">
               
                </a>
            </div>

            <div class="sidebarCollapseFixed">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </div>
            <nav id="compactSidebar">
                <ul class="menu-categories">
                  
                    <?php 
   $id = Auth::user()->id;
   if ($id==13 ||$id==15) {?>
                     
                        <li class="menu">
                        <a href="#Dashboard" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                    class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                        
                                    </path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                </div>
                                <span>Dashboard   </span>
                            </div>
                        </a>
                    </li>

                     
                     
                       <?php } ?>

                    <li class="menu">
                        <a href="#app" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                </div>
                                <span>Monthly<br>Account</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#uiKit" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                </div>
                                <span>One Time</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#components" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                </div>
                                <span>Domains</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                </div>
                                <span>Sales</span>
                            </div>
                        </a>
                    </li>



                       
                       
                



                       
                      
                 
                </ul>
            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">

                <div class="submenu" id="dashboard">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#dashboard"> 
                        <li class="menu-block">
                            <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Analytics </a>
                        </li>
                        <li class="menu-block">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg> Sales </a>
                        </li>
                        
                             
                    </ul>
                </div>

                <div class="submenu" id="app">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#app"> 
                        <li class="menu-block">
                            <a href="https://corddigital.com/system/public/site/admin/monthlyAccDisplay">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                    
                                </path></svg> Monthly<br>Account </a>
                        </li>
                                 
                    </ul>
                </div>
                <div class="submenu" id="uiKit">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#app"> 
                        <li class="menu-block">
                            <a href="https://corddigital.com/system/public/site/admin/OneTime">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                    
                                </path></svg> One<br>Time </a>
                        </li>
                     
                     
         

                    </ul>
                </div>
                  <div class="submenu" id="components">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#app"> 
                        <li class="menu-block">
                            <a href="https://corddigital.com/system/public/site/admin/Domains_Servers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                    
                                </path></svg> Domains &<br>Servers </a>
                        </li>
                                 
                          

                    </ul>
                </div>
                  <div class="submenu" id="forms">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#app"> 
                        <li class="menu-block">
                            <a href="https://corddigital.com/system/public/site/admin/sales">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                    
                                </path></svg> Sales</a>
                        </li>
                    
                     
                     
                    </ul>
                </div>


   <div class="submenu" id="Dashboard">
                    <ul class="submenu-list menu-block-submenu" data-parent-element="#app"> 
                        <li class="menu-block">
                            <a href="https://corddigital.com/system/public/site/admin/sales1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                    
                                </path></svg>  Add Agent  </a>
                        </li>
                    
                        <li class="menu-block">
                            <a href="https://corddigital.com/system/public/site/admin/Analytics">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                    
                                </path></svg>  Analytics    </a>
                        </li>
                     
                    </ul>
                </div>
                



            </div>

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="content-container">
<!-- Trigger/Open The Modal -->


                    <div id="tabTogg" class="col-left layout-top-spacing">
                        <div class="col-left-content">

                            <div class="header-container">
                                <header class="header navbar navbar-expand-sm">                                    
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="page-header">
                                            <div class="page-title">
                                                <h3>  
                                                <?php $locale =\Request::segment(3) ; if($locale=='Domains_Servers' ){echo 'Domains And Servers ';}else{} ?>
                                                
                                                 <?php $locale =\Request::segment(3) ; if($locale=='monthlyAccDisplay' ){echo 'Monthly Account ';}else{} ?> 
                                                 
                                                 <?php $locale =\Request::segment(3) ; if($locale=='OneTime' ){echo 'One Time';}else{} ?> 
                                                 
                                                  <?php $locale =\Request::segment(3) ; if($locale=='sales' ){echo 'Sales';}else{} ?>
                                                  </h3>
                                                  
                                                  <br>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalAdd">Add   
                                                <?php $locale =\Request::segment(3) ; if($locale=='Domains_Servers' ){echo 'Domains And Servers ';}else{} ?>
                                                
                                                 <?php $locale =\Request::segment(3) ; if($locale=='monthlyAccDisplay' ){echo 'Monthly Account ';}else{} ?> 
                                                 
                                                 <?php $locale =\Request::segment(3) ; if($locale=='OneTime' ){echo 'One Time';}else{} ?> 
                                                 
                                                  <?php $locale =\Request::segment(3) ; if($locale=='sales' ){echo 'Sales';}else{} ?>
                                                   </button> 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalfilter">Filter   
                                                <?php $locale =\Request::segment(3) ; if($locale=='Domains_Servers' ){echo 'Domains And Servers ';}else{} ?>
                                                
                                                 <?php $locale =\Request::segment(3) ; if($locale=='monthlyAccDisplay' ){echo 'Monthly Account ';}else{} ?> 
                                                 
                                                 <?php $locale =\Request::segment(3) ; if($locale=='OneTime' ){echo 'One Time';}else{} ?> 
                                                 
                                                  <?php $locale =\Request::segment(3) ; if($locale=='sales' ){echo 'Sales';}else{} ?>
                                                   </button> 
                         
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-actions">
                                        <div class="nav-item dropdown language-dropdown more-dropdown">
                                           
                                            
                                            
                                               <a href="javascript:void(0);" class="rightMenuBtn" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        </div>

                                        <div class="toggle-notification-bar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                        </div>
                                    </div>
                                </header>
                            </div>









 @yield('content')	
 
 
         
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="col-right-content">
                              <a href="javascript:void(0);" class="rightMenuBtn" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <br/>
                                        <br/>
                                        
                                        <!-- 
                            <div class="navbar-item flex-row search-ul navbar-dropdown">
                                <div class="nav-item align-self-center search-animated">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <form class="form-inline search-full form-inline search" role="search">
                                        <div class="search-bar">
                                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                            </div>
  !-->
                            <div class="col-right-content-container">

                                <div class="activity-section">

                                    <div class="widget-profile">

                                        <div class="w-profile-view">
                                            <img src=" https://corddigital.com/images/cord-resize-logo.png " alt="admin-profile" class="img-fluid">
                                            <div class="w-profile-content">
                                                <h6> <?php  $email = Auth::user()->email; echo $email ; ?>  </h6>
                                                <p> <?php  $name = Auth::user()->name; echo $name ; ?>     </p>
                                            </div>
                                        </div>
<!-- 
                                        <div class="w-profile-links">
                                            <a href="user_profile.html" class="w-p-link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <p>My Profile</p>
                                            </a>

                                            <a href="apps_mailbox.html" class="w-p-link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>
                                                <p>Inbox</p>
                                            </a>
                                        </div>
                                         !-->
                                    </div>

                                    <div class="widget-todo">
                                        <div class="todo-content">
                                            <div class="todo-title">
                                                <h6><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></span> <span class="align-self-center">Todo</span></h6>
                                            </div>
                                            <div class="todo-text">
                                                <a href="apps_todoList.html"><p>11 New Task</p></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-message">
                                        <div class="widget-title">
                                            <h5>Messages</h5>
                                            <a href="apps_chat.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                                    
                                                </path></svg>
                                            </a>
                                        </div>

                                        <div class="widget-messages">
                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Andy King</h5>
                                                    <p class="w-msg-text">Work is delayed</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Alma Clark</h5>
                                                    <p class="w-msg-text">It was a bit dramatic.</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Vincent</h5>
                                                    <p class="w-msg-text">Coffee?</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Iris Hofman</h5>
                                                    <p class="w-msg-text">Not comming to office today.</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Linda Nelson</h5>
                                                    <p class="w-msg-text">Uploaded files to server.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="widget-invoice">
                                        <div class="widget-title">
                                            <h5>New Invoice</h5>
                                            <a href="apps_invoice.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                            </a>
                                        </div>

                                        <div class="widget-invoice-lists">
                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#002658</span></a> is generated for <span class="usr-name">Laurie Fox</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#0036489</span></a> is generated for <span class="usr-name">Ernest Reeves</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#014778</span></a> is generated for <span class="usr-name">Sean Freeman</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#0165987</span></a> is generated for <span class="usr-name">Nia Hillyer</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#0265998</span></a> is generated for <span class="usr-name">Dale Butler</span></p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="widget-taskBoard">
                                        <div class="widget-title">
                                            <h5>Task Board</h5>
                                            <a href="apps_scrumboard.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                            </a>
                                        </div>

                                        <div class="widget-taskBoard-lists">
                                            <div class="w-taskBoard">
                                                <p class="w-taskBoard-text"><a href="apps_scrumboard.html"><span class="taskBoard-number">Launch New Seo Wordpress Theme</span></a> has been moved to <span class="taskBoard-name">Completed</span> Board by <span class="usr-name">Alma Clark</span></p>
                                            </div>

                                            <div class="w-taskBoard">
                                                <p class="w-taskBoard-text"><a href="apps_scrumboard.html"><span class="taskBoard-number">New Task</span></a> is added by <span class="usr-name">Ernest Reeves</span></p>
                                            </div>

                                            <div class="w-taskBoard">
                                                <p class="w-taskBoard-text"><a href="apps_scrumboard.html"><span class="taskBoard-number">Dinner with Kelly Young</span></a> has been moved to <span class="taskBoard-name">Completed</span> Board by <span class="usr-name">Dale Butler</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-calendar">
                                        <div class="widget-title">
                                            <h5>Event Notifications</h5>

                                            <div class="task-action">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>
        
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                                        <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="widget-calendar-lists">
                                            <div class="widget-calendar-lists-scroll">
                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c6">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    </div>
                                                    <p class="w-calendar-text"><span class="calendar-number">New Event</span> has been added on <span class="calendar-name">15 Dec 2020</span></p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c3">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </div>
                                                    <p class="w-calendar-text">Collect <span class="calendar-number">documents</span> from <span class="calendar-number">Kelly</span> at the restaurant tommorrow.</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c1">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </div>
                                                    <p class="w-calendar-text"><span class="calendar-number">Meeting Event</span> on 12 Nov has been updated to 8 PM</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c5">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    </div>
                                                    <p class="w-calendar-text"><span class="calendar-number">New Event</span> Seminar organised by Design Reset will be held on 25 January</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c2">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                                    </div>
                                                    <p class="w-calendar-text">Today's <span class="calendar-number">Conference</span> is Cancelled.</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c4">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </div>
                                                    <p class="w-calendar-text">Meeting with <span class="calendar-number">Project Lead</span> on 01 Jan has been updated to 15 Jan</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <!-- The Modal -->

          <script src="{{  asset('new_d/') }}/assets/js/libs/jquery-3.1.1.min.js"></script>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{  asset('new_d/') }}/bootstrap/js/popper.min.js"></script>
    <script src="{{  asset('new_d/') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{  asset('new_d/') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{  asset('new_d/') }}/assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    
    
    
    

 
 
    <script src="{{  asset('new_d/') }}/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
 <script src="{{  asset('new_d/') }}/plugins/apex/apexcharts.min.js"></script>
    <script src="{{  asset('new_d/') }}/assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{  asset('new_d/') }}/plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{  asset('new_d/') }}/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="{{  asset('new_d/') }}/plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="{{  asset('new_d/') }}/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="{{  asset('new_d/') }}/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    
    <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                     { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 9 
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    
    <style>
    
   .table>tbody>tr>td , .table>thead>tr>th{
       text-align: center;
     min-width: 190px;
    max-width: 190px;
    overflow: auto;
    
    }
    </style>
 
</body>
</html>


		 
 