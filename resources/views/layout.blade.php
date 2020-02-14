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
            header{
                height: 75px;
                background-color: #006F84;
                border: 0;
                /*position: fixed;*/
                width: 100%;
                z-index: 9999;
                top: 0;
                left: 0;                
            }
            h1{
                color: white;
                line-height: 75 px;
                float : left;                
            }

            .wrrapper{
                width: 1170 px;
                margin: 0 auto;
            }
            .clearfix{
                content: '';
                display: block;
                clear: both;
            }
            .nav-menu{
            
                border: none; 
                border: 1px;
                float: right;
                background-color: #FFDAB9;
            }
            .nav-menu ul{
                background-color: #FFDAB9;
                list-style: none;
                margin: 0;
                padding: 0;
                padding-right: 20px;
                
            } 
            
            .nav-menu li{
                float: left;
                padding: 0 15px;
                line-height: 75px;
            }
            
            .nav-menu li a{
                display: block;
                background-color: #FFDAB9;
                color: #000000;
                padding: 0px;
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
 
        </style>

    </head>
    <body>
    	<header class="header">
            <div class="warrper"> 
                <h1>GS ENERGY MONITORING</h1>          
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
            </div>
        </header>
    	<section>
            @yield('content')
    	</section>
    	
    </body>
</html>
