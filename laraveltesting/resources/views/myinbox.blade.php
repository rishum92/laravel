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
        <title>Metronic | Inbox</title>
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
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">
       @include('includes.header')
      <div class="clear"/>
       <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Inbox
                                <small>user inbox</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                       
                    </div>
                </div>
                <!-- END PAGE HEAD-->
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
                            <li>
                                <span>Apps</span>
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
                                             <div class="modal fade" id="composer" tabindex="-1" role="basic" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                            <h4 class="modal-title">Compose</h4>
                                                        </div>
                                                        <div class="modal-body">@include('includes.compose')</div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn green">Save changes</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                
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