<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | User Card Elements</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-switch/css/bootstrap-switch.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/css/components.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/css/inbox.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <style>
        .star{
    background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAABQCAYAAAAZQFV3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABOFJREFUeNrsmEFoHFUYx9/MdHfTJRKzUhBaFiL1YghZCFQUIV6UQJuLWCgr8eKpIoiFSqsHQYrmYj14KHqxKAl6MbA5eCgKRVAMBhpCwIJQCETRQzTsNtnO7s74+17fbGc3M7OzZhUsHfjzdvd97/++973vff99Y/m+rwb5WL0Idz60h2nckTc8Nw2hncLmAnhtIB7i3VGan8VD8Dhebh+U8FOaX8Bh4EB48R8TQlai+QnkgMTxD/AYpFt9EULk0EyBD8Dn4BPT9TZ4CrwD6Wos4V+XrUdpXzQk4tUEkAFXwNUu+1fAWWO7anADLDLJTkCYpf0K3DQe3Ui5oUI6B8ShlyBstZfMMiXoX4MV8GZKQgnJcXA6nKPtGJoE/gZ8Cy6mIJPwnIJsL3ZTIB2h+U6WANZjyE6Aj8Cz3WT7TooJ7HUwneDdc+BaFFnc0SuCzQTCTWOT+iwfN6cjWJ6clo9NzOS5Bcb6IZTZj5pU+syEYNV8XzA2Y6lOCptyhGbDeDFPnJa6TlGZ5rxJ/nxkSRPCACR5EUyHf4sCNjOgENVn/ecVe+CEy8vLWgJmZ2fd1IRra2vxSbe5eYlmu1gsXo6zmZycTKcpkEn6vC61kM+FQYiUeDdvauP5Ay0ZjyIlgKVv9bVkiBwQVJRX2YwWkKLxrhxB+qYSPaxUKrESANHVrh2PlQAzqSbskAA6UkkA5B0SICvRSzb5ddrMWu4jh8umSLwckLVjSKClWJ6SwsrM76fwLpCAM4x1I9OGjhrN8+AkAyYSyGTDnhEHjCPxeYhBagmIIvtXJOBQkgSY5Z01/76umAy4lbpiG5IqzQuG6Alz9LLmf+IP5hh+AfmxnoSQdUgAg5a6JuuQgMiSFi7fJHkR9JQAbGbA/SoBi4uLWgLK5XIqCdBpkyQBZne3sTm4BGxsbLQlgM+DkYBsNjucyWQKaSXATvCuZFnWHIQqlxMVUOeMx/0RMsgBWgIgcyBVgqwwIwH0JUvAwsJChwQwuOQ4jrJtO/CsfQBc11We56lWqyXfOySALNgJdlmuWzNSB/P5vBKyyJnxMjxBs9mc2tvbEye+DN1l7uYhuaZvAXg1LaQyOOkRL3d3d8XLishHOEd1DMfHx7UEYLjCrCop2aXP2Mht4QxjoyWADi0BxGddZm80GjpWYSL5TfpkYnHAOBK/yxhoCZAl1et1PbharWrUajX9m/SJBESRJUlAr6fvW0CvZyyxOIQPN4kbnv1mlwQERGPhMbHli/Q5Yv5lSdDnSYelrlLWIQGRJS1cvjk1RdBTArCZAferBPT7IkjvcuP7t3pKADaxEpB5+r10FXv3x3kKqqUlgM+DkQB76OFhKzdycAnAo5KynTlraFTZQ4/gqH3ursd9EjLIAVoC7KGCAxFWNqSjWgLoS5aAfS+C7EzJcrLKOjSkrNwoFu0ToPz6n8pv3dFQXjPyRdA9CbDsk/ZDx5SQxWiAsg4X7vE361NedQsn/P0SELwIgmzaHiZMtpMcKK+pWlUuVF6j0v0iSMcw/+QFLQF+y13xbv/GpF4CWUt5tV+FTEsAY6MlgA4tASxlnaUo362yLGLlh2Lo1iCjj4nFAeNI/H9sDHbYxesEfcK//XvSoq9Fkf0/JCDqDWfV3I+TJGCLne19CzAvgtoS8OBF0APC6OdvAQYAj2xzC/IfXBsAAAAASUVORK5CYII=');
    background-position:left -2px;
    display:block;
    width:20px;
    height:16px;
    line-height:16px;
    float:left;
    cursor: pointer;
    zoom:1;
}

.fullStar{
    background-position:left -59px;
}

.stars{
    overflow: hidden;
}

.tmp_es{
    background-position:left -21px;
}

.tmp_fs{
    background-position:left -40px;
}
        </style>
         </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">
       @include('includes.header')
      <?php $sid = Session::get('id');
        
      ?>
       <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
               
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="{{ url('myprofile')}}">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <i class="fa fa-circle"></i>
                            </li>
                           
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="inbox">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="inbox-sidebar">
                                            <a class="btn red compose-btn btn-block" data-toggle="modal" href="#composer"> <i class="fa fa-edit"></i> Compose </a>
                                             
                                             <ul class="inbox-nav">
                                                <li class="active">
                                                    <a href="{{ url('inboxview') }}" data-type="inbox" data-title="Inbox"> Inbox
                                                       
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('importantview') }}" data-type="important" data-title="Inbox"> Important </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('inboxsent') }}" data-type="sent" data-title="Sent"> Sent </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('inboxdraft') }}" data-type="draft" data-title="Draft"> Draft
                                                        
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="{{ url('inboxtrash') }}" class="sbold uppercase" data-title="Trash"> Trash
                                                        
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="inbox-body">
                                            <div class="inbox-header">
                                                <h1 class="pull-left">Inbox</h1>
                                                
                                            </div>
                                            
                                            
                                            <form method = "POST" action = "{{ url('deletemail')}}">
                                           {!! csrf_field()!!}
                                                    <table class="table table-striped table-advance table-hover">
    <thead>
        <tr>
            
            <div class="actions">
                                                <div class="btn-group">
                                                    <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                        <i class="fa fa-angle-down"></i>

                                                    </a>

                                       <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"><i class="fa fa-pencil"></i> Mark as read</a>
                                                        </li>
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"><i class="fa fa-ban"></i>Spam</a>
                                                        </li>
                                                        <li>
                                                             
                                                            <a href ="" ><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <button type="submit" class="btn btn-default" style="float:right;">
                                                   <i class="fa fa-trash-o"></i>
                                               </button>
                                            </div>
                                            
           
        </tr>
                                        </thead>
                                             <tbody>
                                                 @foreach($users as $user)
                                                 @if($user->is_deleted == 0)
                                                <tr class="unread" data-messageid="1">
                                                     <td> <input type="checkbox" name = "check[]" value= "{{$user->m_id}}" ></td>
                                                    <td class="inbox-small-cells">
                                                       <input type = "radio" name = "star" id = "{{$user->m_id}}" value= "{{$user->m_id}}" onchange = "myalert(<?php echo $user->m_id; ?>)" class = "star" />
                                                    </td>
                                                    <td class="view-message hidden-xs">{{$user->subject}}</td>
                                                    <td class="view-message "> {{$user->message}}</td>
                                                </tr>
                                                  @endif

                                                   <script>
                                                 function myalert(abc)
                                                 {
                                                    $.ajax
                                                    ({
                                                        type: "GET",
                                                        url : "importantdata/"+abc,  

                                                    })

                                                 }

                                             </script>   
                                            </tbody>
                                            
                                             @endforeach
                                           
                                    </table>
                                                                      
                                     </form>                                         


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            

        </div>
        <!-- END CONTAINER -->
        
        @include('includes.footer')
        <!--[if lt IE 9]>
<script src="../assets/plugins/respond.min.js"></script>
<script src="../assets/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/plugins/jquery.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/js/app.js" type="text/javascript"></script>
        <!-- END THEMGLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/js/inbox.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/js/layout.js" type="text/javascript"></script>
        <script src="assets/js/demo.js" type="text/javascript"></script>
        <script src="assets/js/quick-sidebar.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>