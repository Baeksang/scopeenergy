<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1">  -->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>@yield('title', 'Solar')</title>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

        <!-- Styles -->
        <style>
            
             
            ul {
                background-color: #FFDAB9;
                list-style-type: none;
                margine: 0;
                padding: 0;
                overflow: hidden;
            }
            li { float: left; }
            li a {
                display: block;
                background-color: #FFDAB9;
                color: #000000;
                padding: 8px;
                text-decoration: none;
                text-align: center;
                font-weight: bold;
            }
            
            li a.current {
                background-color: #CD853F;
                color: white;
            }
            li a:hover:not(.current) {
                background-color: #CD853F;
                color: white;
            }
            
            .nav-menu{
            
                border: none; 
                border: 0px;
            }
            .nav-menu ul{
                background-color: #FFDAB9;
                list-style: none;
                margine: 0;
                padding: 0;
            } 
            
            .nav-menu li{
                float: left;
                padding: 0px;
            }
            
            .nav-menu li a{
                display: block;
                background-color: #FFDAB9;
                color: #000000;
                padding: 8px;
                text-decoration: none;
                text-align: center;
                font-weight: bold;
            }
            
            .nav-menu li a:hover, .nav-menu ul li:hover a{
                background-color: #FFDAB9;
                color: #000000;
                text-decoration:none;
               
            }
            .nav-menu li ul {
                display: none;    
                position: absolute;
                height: auto;
            }
            .nav-menu li:hover ul{
                display: block;   
                
            } 
            
            .nav-menu li li{
                background-color:  #FFDAB9;
                display: block;
                float: none;
                margin: 0px;
                padding: 0px;
            }
            .nav-menu li:hover li a{
                background-color : none;
            }
            .nav-menu li ul a{
                display: block;
                font-style: normal;
                text-align: left;
            
            }
            .nav-menu li ul a:hover, .nav-menu li ul li:hover a{
                background-color: #CD853F;
                border:0px;
                color:white;
                text-decoration:none;  
            }
        
            
            
            
            
            
            
            #blogMenu ul ul{
                display: none;
            }      
            
            #blogMenu ul li:hover ul {
                display: block;
                
                background-color: #5c5c5c;
            }
            
            #blogMenu ul ul li{
                float: none;
            }
               
        </style>

    </head>
    <body>
    	<header class="header">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-6 pl-0 pr-2 header-right"><!-- Start Logo Site-->
    					<a href="/monitoring" class="logo d-flex align-item-center">
    						<div class="logo_image">
    							<img src="/resource/images/log_highway.png" alt="">
    						</div>
    						<div class="logo_title">
    							<h1 class="site-title">GS Solar Energy Management System</h1>
    								<p class="site-sub m-0">Log House Solar Power</p>
    						</div>
    					</a>
    					<div id="eventPOPUPFrame" class="event-notification poisition-absolute d-flex justify-content-center align-items-center event-notification--orange">
    						Event
    					</div>
    				</div><!-- End Logo Site -->
    				<div class="col-6 pr-0 pl-2 header-left"><!-- Start Top Info -->
    					<div class="top-header d-flex flex-row justify-content-end">
    						<div class="date-time d-flex flex-wrap align-items-center">
    							<p id="curDateKo" class="date-time--date">2020-01-28</p>
    							<p id="curTime" class="date-time--time">10:00:00</p>
    						</div>
    						<div class="userLogin d-flex flex-wrap align-items-center">
    							<a href="javascript:void(0)" class="account" style="cursor:default;">David</a>
    							
    							<form id="logOutForm" name="logOutForm" method="post">
        							<a href="javascript:void(0)"  class="logout" data-fancybox="" data-src="#alert-detail_popup">
        							Logout</a>
    							</form>
    						</div>
    					</div><!-- End Top Info -->
    					
    					<nav class="nav-menu">
    						<ul>
    							<li class="menu-item"><a id="monitoring" href="/monitoring">Monitoring</a></li>
    							<li class="menu-item"><a id="diagram" href="/diagram">Diagram</a></li>    							  
								<li class="menu-item"><a id="operation" href="/operatoin">Operation</a></li>
								<li class="menu-item"><a id="status" href="/status">Status</a>
									<ul >
										<li><a id="generatedStatus" href="/status/generated">Generation</a></li>
										<li><a id="operationStatus" href="/status/operated">Operation</a></li>
										<li><a id="equipmentStatus" href="/status/equipment">Equipment</a></li>
										<li><a id="eventStatus" href="/status/equipment">Event</a></li>
										<li><a id="equipmentStatus" href="/status/benefit">Benefit</a></li>
										<li><a id="eventStatus" href="/status/operation">Operation</a></li>
									</ul>
								</li>
								<li class="menu-item"><a id="management" href="/management">Management</a>								
									<ul>
										<li><a id="generatedStatus" href="/management/loginhistory">Login</a></li>
										<li><a id="operationStatus" href="/management/user">User</a></li>
										<li><a id="equipmentStatus" href="/management/setting">Setting</a></li>									
									</ul>
								</li>	 						    						 						
    						</ul>    					
    					</nav><!-- End Menu -->
    							
    					
   					</div><!-- End Header Right -->
    			</div>
    		</div>
    	
    	</header>
    	
    	@yield('content')
    	
    </body>
</html>
