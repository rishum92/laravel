<?php $pic = Session::get('pic'); ?>
<?php $username = Session::get('username');?>
<!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="#">
                            <img src="assets/images/logo-default.jpg" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                @if($pic)
                                    <img alt="" class="img-circle" src="assets/images/avatars/{{$pic}}">
                                    @else
                                     <img alt="" class="img-circle" src="assets/images/avatars/avatar.png">
                                     @endif
                                    <span class="username username-hide-mobile">{{ $username}}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{ url('myprofile') }}">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('logout') }}">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                           
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <form class="search-form" action="page_general_search.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
                            
                            <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="{{ url('myprofile') }}"> My Profile
                                    <span class="arrow"></span>
                                </a>
                                
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="{{ url('userlist') }}"> User List
                                    <span class="arrow"></span>
                                </a>
                                
                            </li>
                            
                            <li class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                                <a href="{{ url('myfriends') }}"> My Friends
                                    <span class="arrow"></span>
                                </a>
                               
                            </li>
                            <li class="menu-dropdown classic-menu-dropdown">
                                <a href="{{ url('friendrequest') }}"> Friend Request
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown  mega-menu-full">
                                <a href="{{ url('myinbox') }}"> My Inbox
                                    <span class="arrow"></span>
                                </a>
                               
                            </li>                           
                               
                        </ul>
                    </div>
                 
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
        