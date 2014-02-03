<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Express Bus Package v1.0 | Usuarios | by ArielMax</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ArielMax">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="lib/FontAwesome/css/font-awesome.css">
    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="javascripts/site.js" type="text/javascript"></script>
    
<script type="text/javascript" src="lib/DataTables-1.9.4/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="lib/DataTables-1.9.4/media/js/jquery.dataTables.bootstrap.js"></script>

<script type="text/javascript">
    $(function(){
       $('table.data-table.sort').dataTable( {
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false 
        });
       $('table.data-table.full').dataTable( {
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true,
            "sPaginationType": "full_numbers",
            "sDom": '<""f>t<"F"lp>',
            "sPaginationType": "bootstrap"
        });
    });
</script>

    <link rel="stylesheet" type="text/css" href="css/theme.css">


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
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
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
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Dashboard" href="index.html"><i class="icon-home"></i> <span class="caption">Dashboard</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Reports" href="reports.html"><i class="icon-bar-chart"></i> <span class="caption">Reports</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="UI Features" href="components.html"><i class="icon-briefcase"></i> <span class="caption">UI Features</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Pricing" href="pricing.html"><i class="icon-magic"></i> <span class="caption">Pricing</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Media" href="media.html"><i class="icon-film"></i> <span class="caption">Media</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog" href="blog.html"><i class="icon-beaker"></i> <span class="caption">Blog</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog Entry" href="blog-item.html"><i class="icon-coffee"></i> <span class="caption">Blog Entry</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Help" href="help.html"><i class="icon-question-sign"></i> <span class="caption">Help</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Faq" href="faq.html"><i class="icon-book"></i> <span class="caption">Faq</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Calendar" href="calendar.html"><i class="icon-calendar"></i> <span class="caption">Calendar</span></a></li>
                    
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Forms" href="forms.html"><i class="icon-tasks"></i> <span class="caption">Forms</span></a></li>
                    
                    
                    <li class="active "><a rel="tooltip" data-placement="right" data-original-title="Tables" href="tables.html"><i class="icon-table"></i> <span class="caption">Tables</span></a></li>
                    
                    
                    
                    <li class=" theme-mobile-hack hidden-xs"><a rel="tooltip" data-placement="right" data-original-title="Mobile" href="mobile.html"><i class="icon-comment-alt"></i> <span class="caption">Mobile</span></a></li>
                    
                    <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Icons" href="icons.html"><i class="icon-heart"></i> <span class="caption">Icons</span></a></li>
                    
                    
                </ul>
            </div>

            <ul class="nav nav-tabs hidden-xs">
                <li class="active"><a href="index.html"><i class="icon-dashboard"></i> <span>Dashboard</span></a></li>
                <li ><a href="reports.html" ><i class="icon-bar-chart"></i> <span>Reports</span></a></li>
                <li ><a href="components.html" ><i class="icon-cogs"></i> <span>Components</span></a></li>
                <li ><a href="pricing.html"><i class="icon-magic"></i> <span>Pricing</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sign-in.html"><span>Sign-in Page</span></a></li>
                        <li><a href="sign-up.html"><span>Sign-up Page</span></a></li>
                        <li><a href="reset-password.html"><span>Forgot Password Page</span></a></li>
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
    <div class="col-sm-12">
       

        <h2 style="margin-bottom: -1em;">Usuarios</h2>
        <table class="table table-first-column-number data-table display full">
          <thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Teléfono</th>
            <th>Email</th>
            <th>Creado</th>
			<th>Nivel</th>
            <th>Operaciones</th>
		</tr>
	</thead>
          <tbody>
            
            <tr>
              <!-- $users es la variable enviada de controles with()-->
@if($users)
<!--asignamos a un bucle de array $users a $user-->
@foreach($users as $user) 
<td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->phone }}</td><td>{{ $user->email }}</td><td>{{ $user->created_at }}</td><td>{{ $user->level }}</td><td><span class="label label-info">Editar</span> <span class="label label-success">Enviar mensaje</span> <span class="label label-danger">Eliminar</span></td></tr>  
@endforeach  			
	</tbody>
	
</table>
    </div>
</div>
@else
<div class="alert alert-danger fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<strong>Error</strong>Todavia no hay ningún usuario registrado Por favor registrese.
</div>
@endif
        
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
    
  </body>
</html>


