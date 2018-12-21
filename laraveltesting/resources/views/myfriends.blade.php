
<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700 &amp;subset=all" rel="stylesheet" type="text/css">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/css/components.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/css/profile.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css">
        <link href="assets/css/default.css" rel="stylesheet" type="text/css" id="style_color">
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico"> 
       
  </head>
    <!-- END HEAD -->

   <body class="page-container-bg-solid page-boxed">

   @include('includes.header')
 <?php $sid = Session::get('id')

?>
    <div class="page-container">
            <!-- BEGIN CONTENT -->
             

                  <!-- BEGIN PAGE CONTENT BODY -->
              
                                               <div class="portlet-body">
                                                  <div class="tab-content">
                                                          <!-- PERSONAL INFO TAB -->
                                                            <div class="tab-pane active" id="tab_1_1">
                                                              <div class="form-group">                      
                                                                @foreach($users as $user)
                                                                @if($user->id !== $sid)
                                                                @if($user->status == 1) 

                                                                  <div class="profile-sidebar">
                                                                    <!-- PORTLET MAIN -->
								                                                      <div class="portlet light profile-sidebar-portlet">
                                                                            
								                                                        <!-- SIDEBAR USERPIC -->
								                                                          <div class="profile-userpic">
                                                                              @if($user->profile_pic)
								                                                               <center><img src="assets/images/avatars/{{$user->profile_pic}}" /></center></div>
                                                                               @else
                                                                                <div class="profile-userpic">
                                                                               <center><img src="assets/images/avatars/avatar.png" /></center></div>
                                                                               @endif
                                                                            <center><h3><a href="{{ url('myfriendview/'.$user->id) }}" class="btn green">{{ $user->full_name }}</a></h3></center><br>
                                                                            <center><a href="javascript:;" class="btn green">Friends</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="myinbox"   class="btn green">Message</a></center>
								                                                          </div>
                                                                        <!-- END SIDEBAR USERPIC-->
                                                                      </div>
                                                                    <!-- END PORTLET MAIN-->
								                                                  </div>
                                                                  @endif
                                                                @endif
                                                                @endforeach
								                                              </div>
                                                            </div>
                                                          <!--END PERSONAL INFO TAB -->  
                                                  </div>
                                              </div>
                                    </div>
        <!-- END CONTAINER -->

        @include('includes.footer')
   </body> 
</html>
