<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Sistema Gestion Flota :: GPS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistema de Control de Flota GPS en HTML5">
  <meta name="author" content="zetalabs">

  <!-- Bootstrap -->
  {{ HTML::style('css/bootstrap.css') }}
  {{ HTML::style('css/themes/default.css') }}
  {{ HTML::style('css/bootstrap-responsive.css') }}

  <!-- Full Calender -->
{{ HTML::style('scripts/fullcalendar/fullcalendar/fullcalendar.css') }}

  <!-- Bootstrap Date Picker -->
  {{ HTML::style('scripts/datepicker/css/datepicker.css') }}
  
  <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
  {{ HTML::style('scripts/blueimp-jQuery-File-Upload/css/jquery.fileupload-ui.css') }}
  
  <!-- Bootstrap Image Gallery styles -->
  {{ HTML::style('http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css') }}
  
  <!-- Uniform  Screen, Projection -->
  {{ HTML::style('scripts/uniform/css/uniform.default.css') }}

  
  <!-- Chosen multiselect -->
  {{ HTML::style('scripts/chosen/chosen/chosen.intenso.css') }}

  <!-- Simplenso -->
  {{ HTML::style('css/simplenso.css') }}
  
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.html">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.html">
</head>
<body id="dashboard">
<!-- Top navigation bar -->
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="index-2.html">Zetalabs</a>
      <div class="btn-group pull-right">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="icon-user"></i> John Doe
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Settings</a></li>
          <li><a class="cookie-delete" href="#">Delete Cookies</a></li>
          <li class="divider"></li>
          <li><a href="login.html">Logout</a></li>
        </ul>
      </div>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="dropdown">
              <a href="#"
                    class="dropdown-toggle"
                    data-toggle="dropdown">
                    Messages <span class="label label-info">100</span>
                    <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="#">Message 1</a></li>
                  <li><a href="#">Another message</a></li>
                  <li><a href="#">Something else message</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Older messages...</a></li>
              </ul>
          </li>
          <li class="dropdown">
                <a href="#"
                      class="dropdown-toggle"
                      data-toggle="dropdown">
                      Settings
                      <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Personal Info</a></li>
                    <li><a href="#">Preferences</a></li>
                    <li><a href="#">Alerts</a></li>
                    <li><a class="cookie-delete" href="#">Delete Cookies</a></li>
                </ul>
          </li>
          <li class="dropdown">
                <a href="#"
                      class="dropdown-toggle"
                      data-toggle="dropdown">
                      Theme
                      <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="theme-switch-default" href="#">Default</a></li>
                    <li><a class="theme-switch-amelia" href="#">Amelia</a></li>
                    <li><a class="theme-switch-cerulean" href="#">Cerulean</a></li>
                    <li><a class="theme-switch-journal" href="#">Journal</a></li>                        
                    <li><a class="theme-switch-readable" href="#">Readable</a></li>
                    <li><a class="theme-switch-simplex" href="#">Simplex</a></li>
                    <li><a class="theme-switch-slate" href="#">Slate</a></li>
                    <li><a class="theme-switch-spacelab" href="#">Spacelab</a></li>
                    <li><a class="theme-switch-spruce" href="#">Spruce</a></li>
                    <li><a class="theme-switch-superhero" href="#">Superhero</a></li>
                    <li><a class="theme-switch-united" href="#">United</a></li>
                </ul>
          </li>
          <li><a href="#">Help</a></li>  
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
<!-- Main Content Area | Side Nav | Content -->    
<div class="container-fluid">
  <div class="row-fluid">
    <!-- Side Navigation -->
    <div class="span2">
      <div class="member-box round-all"> 
        <a><img src="images/member_ph.png" class="member-box-avatar" /></a>
        <span>
            <strong>Administrator</strong><br/>
            <a>John Doe</a><br/>
            <span class="member-box-links"><a>Settings</a> | <a>Logout</a></span>
        </span>
      </div>          
      <div class="sidebar-nav">
        <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list"> 
          <li class="nav-header">Main</li>        
          <li class="active"><a href="index-2.html"><i class="icon-home"></i> Dashboard</a></li>
          <li><a href="blogpost.html"><i class="icon-edit"></i> Add Blog Post</a></li>
          <li><a href="members.html"><i class="icon-user"></i> Members</a></li>
          <li><a href="comments.html"><i class="icon-comment"></i> Comments</a></li>
          <li><a href="gallery.html"><i class="icon-picture"></i> Gallery</a></li>
          <li><a href="calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
          <li class="nav-header">Typography</li>
          <li><a href="typography.html"><i class="icon-font"></i> Typography</a></li>
          <li><a href="grid.html"><i class="icon-th-large"></i> Grid</a></li>
          <li><a href="portlets.html"><i class="icon-th"></i> Portlets</a></li>
          <li><a href="forms.html"><i class="icon-th"></i> Forms</a></li>
          <li><a href="tables.html"><i class="icon-align-justify"></i> Tables</a></li>
          <li><a href="other.html"><i class="icon-gift"></i> Other</a></li>
          <li class="nav-header">Settings</li>
          <li><a class="cookie-delete" href="#"><i class="icon-wrench"></i> Delete Cookies</a></li>
          <li><a class="sidenav-style-1" href="#"><i class="icon-align-left"></i> Side Menu Style 1</a></li>
          <li><a class="sidenav-style-2" href="#"><i class="icon-align-right"></i> Side Menu Style 2</a></li>
          <li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
        </ul>
        </div>
      </div><!--/.well -->
    </div><!--/span-->
    
    <!-- Bread Crumb Navigation -->
  <div class="span10">
      <div>
        <ul class="breadcrumb">
          <li>
            <a href="#">Home</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Library</a> <span class="divider">/</span>
          </li>
          <li class="active">Data</li>
        </ul>
      </div>

      <!-- Geographic Page Visit Map -->
      <div class="row-fluid">
        <div><div id="dashboard-visit-map"></div></div>
      </div>
    
      <div class="row-fluid">
         <!-- Portlet Set 1 -->
         <div class="span4 column" id="col1">
           <!-- Portlet: Browser Usage Graph -->
             <div class="box" id="box-0">
              <h4 class="box-header round-top">Browser Usage Graph
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <div id="dashboard-browser-chart"></div>
                  </div>
              </div>
            </div><!--/span-->
         </div>
         
         <!-- Portlet Set 2 -->
         <div class="span4 column" id="col2">
             <!-- Portlet: Page Visit Graph -->
             <div class="box" id="box-1">
              <h4 class="box-header round-top">Page Visit Graph
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <div id="dashboard-visit-chart"></div>
                  </div>
              </div>
            </div><!--/span-->
         </div>

         <!-- Portlet Set 3 -->
         <div class="span4 column" id="col3">
             <!-- Portlet: Site Activity Gauges -->
             <div class="box" id="box-2">
              <h4 class="box-header round-top">Site Activity Gauges
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <div id="dashboard-new-registrations-gauge-chart"></div>
                  </div>
              </div>
            </div><!--/span-->
         </div>
      </div>     
      
      
      <div class="row-fluid">
        <!-- Calendar -->
        <div class="span12">
           <!-- Portlet: Event Calandar (Fixed) -->
             <div class="box" id="box-0">
              <h4 class="box-header round-top">Event Calendar
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <div id="calendar"></div>
                  </div>
              </div>
            </div><!--/span-->
         </div>
      </div>  

    <div class="row-fluid">
         <!-- Portlet Set 4 -->
         <div class="span4 column" id="col4">
             <!-- Portlet: Site Activity Gauges -->
             <div class="box" id="box-3">
              <h4 class="box-header round-top">Member Activity
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <ul class="dashboard-member-activity">
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/></a>
                          <strong>Name:</strong> <a href="#">John Doe</a><br />
                          <strong>Since:</strong> 21/01/2012<br />
                          <strong>Status:</strong> <span class="label label-success">Approved</span>                                  
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/></a>
                          <strong>Name:</strong> <a href="#">Jane Doe</a><br />
                          <strong>Since:</strong> 21/01/2012<br />
                          <strong>Status:</strong> <span class="label label-important">Banned</span>                                  
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/></a>
                          <strong>Name:</strong> <a href="#">Fred Flintstone</a><br />
                          <strong>Since:</strong> 21/01/2012<br />
                          <strong>Status:</strong> <span class="label label-warning">Pending</span>                                  
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/></a>
                          <strong>Name:</strong> <a href="#">Bat Man</a><br />
                          <strong>Since:</strong> 21/01/2012<br />
                          <strong>Status:</strong> <span class="label label-info">Updates</span>                                  
                        </a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div><!--/span-->
         </div>
         
         <!-- Portlet Set 5 -->
         <div class="span4 column" id="col5">
             <!-- Portlet: Site Activity Gauges -->
             <div class="box" id="box-4">
              <h4 class="box-header round-top">Monthly Statistics
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <ul class="dashboard-statistics">
                      <li>
                        <a href="#">
                          <i class="icon-arrow-up"></i>                               
                          <span class="green">100</span>
                          New Comments                                    
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon-arrow-down"></i>
                          <span class="red">12</span>
                          New Registrations
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon-minus"></i>
                          <span class="blue">33</span>
                          New Articles                                    
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon-fire"></i>
                          <span class="yellow">400</span>
                          User reviews                                    
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon-arrow-up"></i>                               
                          <span class="green">100</span>
                          New Comments                                    
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon-arrow-down"></i>
                          <span class="red">12</span>
                          New Registrations
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon-minus"></i>
                          <span class="blue">33</span>
                          New Articles                                    
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="icon-fire"></i>
                          <span class="yellow">400</span>
                          User reviews                                    
                        </a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div><!--/span-->
        </div>    
        <!-- Portlet Set 6 -->
    <div class="span4 column" id="col6">
             <!-- Portlet: Site Activity Gauges -->
             <div class="box" id="box-5">
              <h4 class="box-header round-top">Member Comments
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                    <ul class="dashboard-member-activity">
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/>
                          <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                        
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/>
                          <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                        
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/>
                          <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                        
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/member_ph.png" class="dashboard-member-activity-avatar"/>
                          <span class="blue">Comment by <strong>Member</strong> on 21/02/2012</span></a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, est at congue gravida...</p>                                
                        
                      </li>
                    </ul>
                  </div>
              </div>
            </div><!--/span-->
         </div>
      </div>         
        
    <!-- Table -->
      <div class="row-fluid">
      
        <div class="span12">
           <!-- Portlet: Browser Usage Graph -->
             <div class="box" id="box-0">
              <h4 class="box-header round-top">Members
                  <a class="box-btn" title="close"><i class="icon-remove"></i></a>
                  <a class="box-btn" title="toggle"><i class="icon-minus"></i></a>     
                  <a class="box-btn" title="config" data-toggle="modal" href="#box-config-modal"><i class="icon-cog"></i></a>
              </h4>         
              <div class="box-container-toggle">
                  <div class="box-content">
                     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered bootstrap-datatable" id="datatable">
                          <thead>
                              <tr>
                                  <th>Username</th>
                                  <th>Date registered</th>
                                  <th>Role</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>   
                          <tbody>
                            <tr>
                                <td>Fred Flinstone</td>
                                <td class="center">2011/01/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Spiderman</td>
                                <td class="center">2011/02/01</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Batman</td>
                                <td class="center">2011/02/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Robin</td>
                                <td class="center">2011/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Catwomen</td>
                                <td class="center">2010/01/21</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Garfield</td>
                                <td class="center">2011/08/23</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bananaman</td>
                                <td class="center">2011/06/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Paul</td>
                                <td class="center">2011/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Wilma Flinstone</td>
                                <td class="center">2011/01/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hulk</td>
                                <td class="center">2011/02/01</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bob the Builder</td>
                                <td class="center">2011/02/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>MacAndCheese</td>
                                <td class="center">2011/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ratamatat</td>
                                <td class="center">2010/01/21</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-success">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>ZoefZoef</td>
                                <td class="center">2011/08/23</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label label-important">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>SpeedyConzales</td>
                                <td class="center">2011/06/01</td>
                                <td class="center">Admin</td>
                                <td class="center">
                                    <span class="label">Inactive</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>TazmanianDevil</td>
                                <td class="center">2011/03/01</td>
                                <td class="center">Member</td>
                                <td class="center">
                                    <span class="label label-warning">Pending</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="icon-zoom-in icon-white"></i>  
                                        View                                            
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="icon-edit icon-white"></i>  
                                        Edit                                            
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="icon-trash icon-white"></i> 
                                        Delete
                                    </a>
                                </td>
                            </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
            </div><!--/span-->
         </div>
      </div>  
 
    </div><!--/span-->
  </div><!--/row-->

  <footer>
    <p>&copy; Zetalabs 2012</p>
  </footer>
    <div id="box-config-modal" class="modal hide fade in" style="display: none;">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">×</button>
        <h3>Adjust widget</h3>
      </div>
      <div class="modal-body">
        <p>This part can be customized to set box content specifix settings!</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary" data-dismiss="modal">Save Changes</a>
        <a href="#" class="btn" data-dismiss="modal">Cancel</a>
      </div>
    </div>
</div><!--/.fluid-container-->
  <!-- javascript Templates
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Google API -->
    {{ HTML::script('http://www.google.com/jsapi') }}

    <!-- jQuery -->
        {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js') }}
    
    <!-- Data Tables -->
    {{ HTML::script('scripts/DataTables/media/js/jquery.dataTables.js') }}
    
    <!-- jQuery UI Sortable -->
    {{ HTML::script('scripts/jquery-ui/ui/minified/jquery.ui.core.min.js') }}
    {{ HTML::script('scripts/jquery-ui/ui/minified/jquery.ui.widget.min.js') }}
    {{ HTML::script('scripts/jquery-ui/ui/minified/jquery.ui.mouse.min.js') }}
    {{ HTML::script('scripts/jquery-ui/ui/minified/jquery.ui.sortable.min.js') }}
    {{ HTML::script('scripts/jquery-ui/ui/minified/jquery.ui.widget.min.js') }}
    
    <!-- jQuery UI Draggable & droppable -->
    {{ HTML::script('scripts/jquery-ui/ui/minified/jquery.ui.draggable.min.js') }}
    {{ HTML::script('scripts/jquery-ui/ui/minified/jquery.ui.droppable.min.js') }}

    <!-- Bootstrap -->
    <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('scripts/bootbox/bootbox.min.js') }}

  <!-- Bootstrap Date Picker -->
  {{ HTML::script('scripts/datepicker/js/bootstrap-datepicker.js') }}
    

    
    <!-- jQuery Cookie -->    
    {{ HTML::script('scripts/jquery.cookie/jquery.cookie.js') }}
    
    <!-- Full Calender -->
    {{ HTML::script('scripts/fullcalendar/fullcalendar/fullcalendar.min.js') }}
    
    <!-- CK Editor -->
    {{ HTML::script('scripts/ckeditor/ckeditor.js') }}
    {{ HTML::script('scripts/ckeditor/adapters/jquery.js') }}
    
    <!-- Chosen multiselect -->
    {{ HTML::script('scripts/chosen/chosen/chosen.jquery.min.js') }}
    
    <!-- Uniform -->
    {{ HTML::script('scripts/uniform/jquery.uniform.min.js') }}
    
    <!-- MultiFile Upload -->
    <!-- Error messages for the upload/download templates -->
  <script>
    var fileUploadErrors = {
        maxFileSize: 'File is too big',
        minFileSize: 'File is too small',
        acceptFileTypes: 'Filetype not allowed',
        maxNumberOfFiles: 'Max number of files exceeded',
        uploadedBytes: 'Uploaded bytes exceed file size',
        emptyResult: 'Empty file upload result'
    };
    </script>
    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/html">
    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
        <tr class="template-upload fade">
            <td class="preview"><span class="fade"></span></td>
            <td class="name">{%=file.name%}</td>
            <td class="size">{%=o.formatFileSize(file.size)%}</td>
            {% if (file.error) { %}
                <td class="error" colspan="2"><span class="label label-important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
            {% } else if (o.files.valid && !i) { %}
                <td>
                    <div class="progress progress-success progress-striped active"><div class="bar" style="width:0%;"></div></div>
                </td>
                <td class="start">{% if (!o.options.autoUpload) { %}
                    <button class="btn btn-primary">
                        <i class="icon-upload icon-white"></i> Start
                    </button>
                {% } %}</td>
            {% } else { %}
                <td colspan="2"></td>
            {% } %}
            <td class="cancel">{% if (!i) { %}
                <button class="btn btn-warning">
                    <i class="icon-ban-circle icon-white"></i> Cancel
                </button>
            {% } %}</td>
        </tr>
    {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/html">
    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
        <tr class="template-download fade">
            {% if (file.error) { %}
                <td></td>
                <td class="name">{%=file.name%}</td>
                <td class="size">{%=o.formatFileSize(file.size)%}</td>
                <td class="error" colspan="2"><span class="label label-important">Error</span> {%=fileUploadErrors[file.error] || file.error%}</td>
            {% } else { %}
                <td class="preview">{% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery"><img src="{%=file.thumbnail_url%}"></a>
                {% } %}</td>
                <td class="name">
                    <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}">{%=file.name%}</a>
                </td>
                <td class="size">{%=o.formatFileSize(file.size)%}</td>
                <td colspan="2"></td>
            {% } %}
            <td class="delete">
                <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">
                    <i class="icon-trash icon-white"></i> Delete
                </button>
                <input type="checkbox" name="delete" value="1">
            </td>
        </tr>
    {% } %}
    </script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    {{ HTML::script('http://blueimp.github.com/JavaScript-Templates/tmpl.min.js') }}
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    {{ HTML::script('http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js') }}
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    {{ HTML::script('http://blueimp.github.com/JavaScript-Canvas-to-Blob/canvas-to-blob.min.js') }}
    {{ HTML::script('http://blueimp.github.com/Bootstrap-Image-Gallery/js/bootstrap-image-gallery.min.js') }}
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    {{ HTML::script('scripts/blueimp-jQuery-File-Upload/js/jquery.iframe-transport.js') }}
    <!-- The basic File Upload plugin -->
    {{ HTML::script('scripts/blueimp-jQuery-File-Upload/js/jquery.fileupload.js') }}
    <!-- The File Upload image processing plugin -->
    {{ HTML::script('scripts/blueimp-jQuery-File-Upload/js/jquery.fileupload-ip.js') }}
    <!-- The File Upload user interface plugin -->
    {{ HTML::script('scripts/blueimp-jQuery-File-Upload/js/jquery.fileupload-ui.js') }}
    <!-- The main application script -->
    {{ HTML::script('scripts/blueimp-jQuery-File-Upload/js/main.js') }}
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->

    <!--[if gte IE 8]>{{ HTML::script('scripts/blueimp-jQuery-File-Upload/js/cors/jquery.xdr-transport.js') }}<![endif]-->
    
    <!-- Simplenso Scripts -->
    {{ HTML::script('scripts/simplenso/simplenso.js') }}
  </body>

</html>