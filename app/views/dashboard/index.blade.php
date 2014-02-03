@if(Auth::check())

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Express Bus Package v1.0 | Administración | ArielMax</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ArielMax">
    @include('includes.styles2')
   
    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="js/site.js" type="text/javascript"></script>
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
<div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-reorder"></span>
          </button>
          
          
          <a class="navbar-brand" href="admin"> <img src="{{ asset('img/silver_box.png') }}" alt=""> Express Bus Package</a>
        </div>
        
        <div class="hidden-xs">
                <ul class="nav navbar-nav pull-right">
                    
                   
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> {{ Auth::user()->username }}
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Opciones</a></li>
                            <li class="divider visible-phone"></li>
                            
                            <li><a tabindex="-1" href="logout"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
        </div><!--/.navbar-collapse -->
    </div>
    </div>


    <div class="navbar-collapse collapse">
        <div id="main-menu">
            

            <div id="phone-navigation" class="visible-xs">
                <ul id="dashboard-menu" class="nav nav-list">
                    
                    <li class="active "><a rel="tooltip" data-placement="right" data-original-title="Dashboard" href="admin"><i class="icon-home"></i> <span class="caption">Administración</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Reports" href="reports.html"><i class="icon-bar-chart"></i> <span class="caption">Reportes</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="UI Features" href="components.html"><i class="icon-briefcase"></i> <span class="caption">Paquetes</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Pricing" href="pricing.html"><i class="icon-magic"></i> <span class="caption">Precios</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Media" href="users"><i class="icon-film"></i> <span class="caption">Usuarios</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog" href="blog.html"><i class="icon-beaker"></i> <span class="caption">Mensajes</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog Entry" href="blog-item.html"><i class="icon-coffee"></i> <span class="caption">Plantillas</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Help" href="help.html"><i class="icon-question-sign"></i>Ayuda</a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Faq" href="faq.html"><i class="icon-book"></i> <span class="caption">Vacío</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Calendar" href="calendar.html"><i class="icon-calendar"></i> <span class="caption">Vacío</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Forms" href="forms.html"><i class="icon-tasks"></i> <span class="caption">Vacío</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Tables" href="tables.html"><i class="icon-table"></i> <span class="caption">Vacío</span></a></li>
                    
                    
                    
                    <li class=" theme-mobile-hack hidden-xs"><a rel="tooltip" data-placement="right" data-original-title="Mobile" href="mobile.html"><i class="icon-comment-alt"></i> <span class="caption">Vacío</span></a></li>
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Icons" href="icons.html"><i class="icon-heart"></i> <span class="caption">Vacío</span></a></li>
                    
                    
                </ul>
            </div>

            <ul class="nav nav-tabs hidden-xs">
                <li class="active"><a href="index.html"><i class="icon-dashboard"></i> <span>Administración</span></a></li>
                <li ><a href="reports.html" ><i class="icon-bar-chart"></i> <span>Reportes</span></a></li>
                <li ><a href="components.html" ><i class="icon-archive"></i> <span>Paquetes</span></a></li>
                <li ><a href="pricing.html"><i class="icon-money"></i> <span>Precios</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gears"></i> Sistema <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sign-in.html"><span>Copias de Seguridad</span></a></li>
                        <li><a href="sign-up.html"><span>Logs</span></a></li>
                        <li><a href="reset-password.html"><span>Licencia</span></a></li>
                        <li><a href="reset-password.html"><span>Acerca de...</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div id="sidebar-nav" class="hidden-xs">
        
        <ul id="dashboard-menu" class="nav nav-list">
            
            <li class="active "><a rel="tooltip" data-placement="right" data-original-title="Dashboard" href="index.html"><i class="icon-home"></i> <span class="caption">Administración</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Reports" href="reports.html"><i class="icon-bar-chart"></i> <span class="caption">Reportes</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="UI Features" href="components.html"><i class="icon-archive"></i> <span class="caption">Paquetes</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Pricing" href="pricing.html"><i class="icon-money"></i> <span class="caption">Precios</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Media" href="<?=URL::to('users'); ?>"><i class="icon-group"></i> <span class="caption">Usuarios</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog" href="blog.html"><i class="icon-envelope"></i> <span class="caption">Mensajes</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog Entry" href="blog-item.html"><i class="icon-print"></i> <span class="caption">Plantillas</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Help" href="help.html"><i class="icon-question-sign"></i> <span class="caption">Ayuda</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Faq" href="faq.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Calendar" href="calendar.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Forms" href="forms.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
            
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Tables" href="tables.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
            
            
            
            <li class=" theme-mobile-hack"><a rel="tooltip" data-placement="right" data-original-title="Mobile" href="mobile.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
            
            <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Icons" href="icons.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
            
            
        </ul>
    </div>
    
    <div class="content">
        
<div class="row">
    <div class="col-sm-8 main-content">

            <h2>Pending Deals
                <span class="info">You have 15 deals that will be closing soon.</span>
            </h2>
            <ul class="item-summary">
            

            
                <li>
                    <div class="overview">
                        <p class="main-detail">April 14th</p>
                        <p class="sub-detail">5:28 PM</p>
                        <span class="label label-success">Active</span> <span class="label label-info">New</span>
                    </div>
                    <div class="info">
                        <p>Trust fund photo letterpress, keytar raw skydiving denim grape keffiyeh etsy art base apple party ball before they.</p>
                        <a class="btn btn-default btn-sm" href="#">Show Details</a>
                    </div>
                    <div class="clearfix"></div>
                </li>
            
                <li>
                    <div class="overview">
                        <p class="main-detail">Jan 24th</p>
                        <p class="sub-detail">2:57 PM</p>
                        <span class="label label-success">Active</span>
                    </div>
                    <div class="info">
                        <p>Trust fund photo letterpress, keytar raw skydiving denim grape keffiyeh etsy art base apple party ball before they.</p>
                        <a class="btn btn-default btn-sm" href="#">Show Details</a>
                    </div>
                    <div class="clearfix"></div>
                </li>
            
                <li>
                    <div class="overview">
                        <p class="main-detail">May 9th</p>
                        <p class="sub-detail">11:9 PM</p>
                        <span class="label label-success">Active</span>
                    </div>
                    <div class="info">
                        <p>Trust fund photo letterpress, keytar raw skydiving denim grape keffiyeh etsy art base apple party ball before they.</p>
                        <a class="btn btn-default btn-sm" href="#">Show Details</a>
                    </div>
                    <div class="clearfix"></div>
                </li>
            
                <li>
                    <div class="overview">
                        <p class="main-detail">June 3rd</p>
                        <p class="sub-detail">1:30 PM</p>
                        <span class="label label-success">Active</span>
                    </div>
                    <div class="info">
                        <p>Trust fund photo letterpress, keytar raw skydiving denim grape keffiyeh etsy art base apple party ball before they.</p>
                        <a class="btn btn-default btn-sm" href="#">Show Details</a>
                    </div>
                    <div class="clearfix"></div>
                </li>
            
            </ul>

            <div id="three-summaries" class="row">
                <div class="col-md-5">
                    <h2>Mailboxes</h2>
                    <ul class="list-group">
                        <li class="list-group-item"><i class="icon-envelope"></i> New<span class="badge badge-important">23</span></li>
                        <li class="list-group-item"><i class="icon-share"></i> Follow Up<span class="badge badge-important">13</span></li>
                        <li class="list-group-item"><i class="icon-star-empty"></i> Starred<span class="badge badge-important">73</span></li>
                        <li class="list-group-item"><i class="icon-hdd"></i> All Messages<span class="badge badge-important">89</span></li>
                        <li class="list-group-item"><i class="icon-bookmark-empty"></i> Archived<span class="badge badge-important">24</span></li>
                        <li class="list-group-item"><i class="icon-thumbs-up"></i> Important<span class="badge badge-important">10</span></li>
                        <li class="list-group-item"><i class="icon-envelope"></i> Personal<span class="badge badge-important">39</span></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <h2>Upcoming Events</h2>
                    <ul class="cards list-group widget" style="border-bottom:0px;">
                        
                        
                        
                        <li class="list-group-item">
                            <button class="btn btn-default pull-right btn-sm" style="margin-top: .8em;">Open</button>
                            <i class="pull-left muted icon-bar-chart" style="margin-top:.3em;"></i>
                            <div>
                                <p class="title"> Campaign Ends</p>
                                <p class="info">Saturday, July 22nd 12:45PM</p>
                            </div>
                        </li>
                        
                        <li class="list-group-item">
                            <button class="btn btn-default pull-right btn-sm" style="margin-top: .8em;">Open</button>
                            <i class="pull-left muted icon-group" style="margin-top:.3em;"></i>
                            <div>
                                <p class="title"> User Training</p>
                                <p class="info">Saturday, July 22nd 12:45PM</p>
                            </div>
                        </li>
                        
                        <li class="list-group-item">
                            <button class="btn btn-default pull-right btn-sm" style="margin-top: .8em;">Open</button>
                            <i class="pull-left muted icon-time" style="margin-top:.3em;"></i>
                            <div>
                                <p class="title"> Free Trial Ends</p>
                                <p class="info">Saturday, July 22nd 12:45PM</p>
                            </div>
                        </li>
                        
                        <li class="list-group-item">
                            <button class="btn btn-default pull-right btn-sm" style="margin-top: .8em;">Open</button>
                            <i class="pull-left muted icon-gift" style="margin-top:.3em;"></i>
                            <div>
                                <p class="title"> User Appreciation Day</p>
                                <p class="info">Saturday, July 22nd 12:45PM</p>
                            </div>
                        </li>
                        
                        <li class="list-group-item">
                            <button class="btn btn-default pull-right btn-sm" style="margin-top: .8em;">Open</button>
                            <i class="pull-left muted icon-plane" style="margin-top:.3em;"></i>
                            <div>
                                <p class="title"> Flight Training</p>
                                <p class="info">Saturday, July 22nd 12:45PM</p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>

                    <h2>Inbox</h2>

                    <table class="table table-first-column-check table-hover">
                        <thead>
                            <tr>
                              <th class="col-md-1"><i class="icon-star-empty"></i></th>
                              <th class="col-md-2">From</th>
                              <th class="col-md-8">Subject</th>
                              <th class="col-md-3">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td><a href="#"><i class="icon-star-empty"></i></a></td>
                              <td><strong>John Doe</strong></td>
                              <td><strong>Message body goes in here</strong> <span class="label label-success pull-right" style="margin-left: .5em;">Follow Up </span> <span class="label label-info pull-right">Work</span></td>
                              <td><strong>11:23 PM</strong></td>
                            </tr>
                            <tr>
                              <td><a href="#"><i class="icon-star-empty"></i></a></td>
                              <td>John Doe</td>
                              <td>Message body goes in here <span class="label label-success pull-right">Follow Up</span></td>
                              <td>Sept4</td>
                            </tr>
                            <tr>
                              <td><a href="#"><i class="icon-star"></i></a></td>
                              <td><strong>John Doe</strong></td>
                              <td><strong>Message body goes in here</strong> <span class="label label-important pull-right">Spam</span></td>
                              <td><strong>Sept3</strong></td>
                            </tr>
                            <tr>
                              <td><a href="#"><i class="icon-star"></i></a></td>
                              <td><strong>John Doe</strong></td>
                              <td> <strong>Message body goes in here</strong> <span class="label pull-right">Personal</span></td>
                              <td><strong>Sept3</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>Top Users</h2>
                    <div class="well widget" style="display: none;">
                        <form class="form-inline" style="margin-bottom: 0px;">
                            <input class="input-xlarge" placeholder="Search All Users..." type="text">
                            <button class="btn btn-default" type="button"><i class="icon-search"></i> Go</button>
                        </form>
                    </div>
                    <table class="table table-first-column-check">
                      <thead>
                        <tr>
                          <th><input type="checkbox"></th>
                          <th>First</th>
                          <th>Last</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Mark</td>
                          <td>Tompson</td>
                          <td>the_mark7</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Ashley</td>
                          <td>Jacobs</td>
                          <td>ash11927</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Audrey</td>
                          <td>Ann</td>
                          <td>audann84</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>John</td>
                          <td>Robinson</td>
                          <td>jr5527</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Aaron</td>
                          <td>Butler</td>
                          <td>aaron_butler</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td>Chris</td>
                          <td>Albert</td>
                          <td>cab79</td>
                        </tr>
                      </tbody>
                    </table>
        </div>

    <div class="col-sm-4 sidebar">
        <div class="widget">
            <h2>Latest Comments</h2>
            <ul class="cards list-group">
                <li class="list-group-item">
                    <p class="title">Ashley Jacobs</p>
                    <div class="img">
                        <img src="images/faces/1b.png">
                        <div class="label label-info">Pro</div>
                    </div>
                    <p class="info-text">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                    <div class="stats">
                        <p class="time">5 minutes ago</p>
                        <span>15 <i class="icon-pushpin"></i></span>
                        <span>27 <i class="icon-comment"></i></span>
                        <span>158 <i class="icon-eye-open"></i></span>
                    </div>
                </li>
                <li class="list-group-item">
                    <p class="title">Sarah Whitman</p>
                    <div class="img">
                        <img src="images/faces/2b.png">
                        <div class="label label-warning">Free</div>
                    </div>
                    <p class="info-text">Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master.</p>
                    <div class="stats">
                        <p class="time">29 minutes ago</p>
                        <span>10 <i class="icon-pushpin"></i></span>
                        <span>19 <i class="icon-comment"></i></span>
                        <span>58 <i class="icon-eye-open"></i></span>
                    </div>
                </li>
                <li class="list-group-item">
                    <p class="title">Connor Adams</p>
                    <div class="img">
                        <img src="images/faces/1a.png">
                        <div class="label label-info">Pro</div>
                    </div>
                    <p class="info-text">Anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack.</p>
                    <div class="stats">
                        <p class="time">Yesterday</p>
                        <span>25 <i class="icon-pushpin"></i></span>
                        <span>39 <i class="icon-comment"></i></span>
                        <span>252 <i class="icon-eye-open"></i></span>
                    </div>
                </li>
                <li class="more">
                    <a href="#">Show All</a>
                </li>
            </ul>
        </div>
        <div class="widget">
            <ul id="myTab" class="nav nav-tabs three-tabs fancy">
              <li class="active"><a href="#home" data-toggle="tab">Orders</a></li>
              <li><a href="#promotions" data-toggle="tab">Promotions</a></li>
              <li class="dropdown">
                <a href="#deals" data-toggle="tab">Deals</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="home">
              <ul class="list-group cards">
                <li class="list-group-item">
                    <p class="pull-right text-error">$20,500</p>
                    <a href="#"><p class="title">Care Hospital</p></a>
                    <p class="info">Sales Rating: 86%</p>
                </li>
                <li class="list-group-item">
                    <p class="pull-right text-info">$9,400</p>
                    <a href="#"><p class="title">New Automotive</p></a>
                    <p class="info">Sales Rating: 72%</p>
                </li>
                <li class="list-group-item">
                    <p class="pull-right text-success">$60,200</p>
                    <a href="#"><p class="title">Money Financial</p></a>
                    <p class="info">Sales Rating: 92%</p>
                </li>
                <li class="list-group-item">
                    <p class="pull-right text-important">$8,640</p>
                    <a href="#"><p class="title">Custom Insurance</p></a>
                    <p class="info">Sales Rating: 84%</p>
                </li>
                <li class="list-group-item" style="border-bottom: 0px;">
                    <p class="pull-right text-warning">$36,700</p>
                    <a href="#"><p class="title">New Technology</p></a>
                    <p class="info">Sales Rating: 66%</p>
                </li>
            </ul>
              </div>
              <div class="tab-pane fade" id="promotions">
                
                <ul class="cards">
                    <li style="padding: 0em 1em;"><h3>This is something interesting.</h3></li>
                    <li>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation labore velit, blog sartorial PBR leggings next level wes anderson artisan.</li>
                    <li>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation labore velit, blog sartorial PBR leggings next level wes anderson artisan.</li>
                    <li>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation labore velit, blog sartorial PBR leggings next level wes anderson artisan.</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="deals">
                <ul class="cards">
                    <li><p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid oranges apples banana.</p><a class="btn btn-default btn-sm" href="#">Show me</a></li>
                    <li><p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid oranges apples banana.</p><a class="btn btn-default btn-sm" href="#">Show me</a></li>
                    <li><p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid oranges apples banana.</p><a class="btn btn-default btn-sm" href="#">Show me</a></li>
                    <li><p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid oranges apples banana.</p><a class="btn btn-default btn-sm" href="#">Show me</a></li>
                </ul>
              </div>
            </div>
        </div>

        <div class="widget">
            <ul class="nav nav-tabs two-tabs fancy">
              <li class="active"><a href="#upgrade" data-toggle="tab">Upgrade Account</a></li>
              <li><a href="#why-upgrade" data-toggle="tab">Why Upgrade?</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="upgrade">
                
                <ul class="cards list-group not-bottom no-sides">
                
                
                
                    <li class="list-group-item">
                    <i class="icon-leaf pull-left text-info"></i>
                        <p class="title"><strong>More Features</strong></p>
                        <p class="info small">This is the kind of thing you really need.</p>
                    </li>
                    
                    <li class="list-group-item">
                    <i class="icon-group pull-left text-info"></i>
                        <p class="title"><strong>Unlimited Users</strong></p>
                        <p class="info small">This is the kind of thing you really need.</p>
                    </li>
                    
                    <li class="list-group-item">
                    <i class="icon-trophy pull-left text-info"></i>
                        <p class="title"><strong>Custom Database</strong></p>
                        <p class="info small">This is the kind of thing you really need.</p>
                    </li>
                    
                    <li class="list-group-item">
                    <i class="icon-book pull-left text-info"></i>
                        <p class="title"><strong>Enhanced Reporting</strong></p>
                        <p class="info small">This is the kind of thing you really need.</p>
                    </li>
                    
                </ul>
                <button class="btn btn-primary pull-right" style="margin:1em 0em;">Upgrade Now</button>
              </div>
              <div class="tab-pane fade" id="why-upgrade">
                <h3>This is something interesting.</h3>
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation labore velit, blog sartorial PBR leggings next level wes anderson artisan.</p>
                <button class="btn btn-primary pull-right" style="margin-bottom: 1em;">Upgrade Now</button>
              </div>
            </div>
        </div>
    </div>
</div>

        
        <footer>
            <hr>
            <p class="pull-right">Design by <a href="#" target="_blank">Ariel Max</a></p>
            <p>&copy; 2014 <a href="http://www.arielmax.com.ar">www.arielmax.com.ar</a></p>
        </footer>
        
    </div>
    
    <script src="lib/bootstrap3/dist/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip({animation:false});
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>

    @endif
    
  </body>
</html>


