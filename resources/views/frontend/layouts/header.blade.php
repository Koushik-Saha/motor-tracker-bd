
<div class="main-menu-area" data-spy="affix" data-offset-top="55">
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-3"> 
                        <div class="logo">
                            <a href="{{route('/')}}"><img src="{{asset('')}}frontend/assets/img/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    
                    <div class="col-md-9"> 
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <div class="main-menu">
                                    <ul class="nav navbar-nav navbar-right">  
                                        <li class="{{ Request::is('/') ? 'active' : ''}}"><a href="{{route('/')}}">Home</a></li>
                                        <li class="{{ Request::is('about') ? 'active' : ''}}"><a href="{{route('about')}}">About Us</a></li>
                                        {{-- <li><a href="#">Products</a></li> --}}
                                        <li class="{{ Request::is('price') ? 'active' : ''}}" ><a href="{{route('price')}}">Price & Packagee</a></li>
                                        <li class="{{ Request::is('contacts') ? 'active' : ''}}"><a href="{{route('contacts')}}">Contact</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Software <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu">
{{--                                                 <li><a href="#">User Menual</a></li>--}}
{{--                                                <li><a href="frontend/assets/user_manual/{{'2019-07-15-5d2c40d8214aa.pdf'}}" >User Menual</a></li>--}}
{{--                                                <li><a href="{{'https://www.facebook.com/' }}">Android App</a></li>--}}
{{--                                                <li><a href="{{'https://twitter.com/' }}">Apple APP</a></li>--}}
                                                <li><a href="frontend/assets/user_manual/{{$software->user_manual}}" >User Menual</a></li>
                                                <li><a href="{{$software->android_app_link }}">Android App</a></li>
                                                <li><a href="{{$software->apple_app_link }}">Apple APP</a></li>
{{--                                                <li><a href="{{'dkhd'}}">Android App</a></li>--}}
{{--                                                <li><a href="{{'asdasdad' }}">Apple APP</a></li>--}}
                                            </ul>
                                        </li>
                                        <li >
                                                <a href="#" onclick="document.getElementById('loginForm').submit();"> 
                                                <i class=""></i> Demo</a>
                                                         <form action="http://139.59.7.60/authentication/store" method="POST" id="loginForm">
                                                            <input type="hidden" name="email" value="demo@moto.com">
                                                            <input type="hidden" name="password" value="demo">
                                                               {{ csrf_field() }}
                                                         </form>

                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">login <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="http://139.59.7.60/">Server 1</a></li>
                                                <li><a href="http://139.59.7.60/">Server 2</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div><!-- /.navbar-collapse -->   
                        </nav>
                    </div>
                </div>
            </div>
        </div>
