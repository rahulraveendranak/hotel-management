<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="t">
   <meta name="keywords" content="t">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <title>Voyager</title>
     <!-- =============== VENDOR STYLES ===============-->
    <!-- <link rel="shortcut icon" href="img/fav.png"> -->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="{{ asset('css/fontawesome/css/font-awesome.min.css') }}">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="{{ asset('css/simple-line-icons/css/simple-line-icons.css') }}">
 
  <!-- DATATABLES-->
    <link rel="stylesheet" href="{{ asset('js/datatables-colvis/css/dataTables.colVis.css')}}">
    <link rel="stylesheet" href="{{ asset('js/datatables/media/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('css/app.css')}}" id="maincss">
    <!-- =============== custom ===============-->
   <link rel="stylesheet" href="{{ asset('css/theme-a.css')}}" id="maincss">

</head>

<body>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
          <a href="#/" class="navbar-brand">
                  <div class="brand-logo">
                     <img src="{{asset('img/logo1.png')}}" alt="App Logo" class="img-responsive" width="78%">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img src="{{asset('img/logo1.png')}}" alt="App Logo" class="img-responsive">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs togglemeu">
                        <em class="icon-options-vertical"></em>
                     </a>
                     <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                     <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle togglemeu">
                        <em class="icon-options-vertical"></em>
                     </a>
                  </li>
                  <!-- START User avatar toggle-->
                  <li>
                      <h3 class="all-head">Hotel Managenment</h3>  
                  </li>
                  <!-- END User avatar toggle-->
                  <!-- START lock screen-->
                  
                  <!-- END lock screen-->
               </ul>
               <!-- END Left navbar-->
               <!-- START Right Navbar-->
             <ul class="nav navbar-nav navbar-right">
                  <!-- <li>
                     <a href="#" >
                        <em class="fa fa-cog"></em>
                     </a>
                  </li> -->
                
                  <li>
                     <a href="#" data-toggle="modal" data-target="#myModal">
                        <em class="fa fa-sign-out"></em>Logout
                     </a>
                  </li>
                  <!-- END Offsidebar menu-->
               </ul>
               <!-- END Right Navbar-->
            </div>
          
         </nav>
         <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
     <!-- header -->
      
<!-- sidebar-->
<aside class="aside">
 <!-- START Sidebar (left)-->
 <div class="aside-inner">
  <nav data-sidebar-anyclick-close="" class="sidebar">
   <!-- START sidebar nav-->
   <ul class="nav">
    <!-- START user info-->
    <li class="has-user-block">
     <div class="user-box-menu">
      <div class="item user-block">
       <!-- User picture-->
       <div class="user-block-picture">
        <div class="user-block-status">
         <img src="{{ asset('img/user/02.jpg')}}" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
         <div class="circle circle-success circle-lg"></div>
       </div>
     </div>
     <!-- Name and Job-->
     <div class="user-block-info">
      <span class="user-block-name">Hello, Admin</span>
      <span class="user-block-role">Manager</span>
    </div>
  </div>
</div>
</li>



<li class="drop-menu">
 <a href="#quotes" title="Manage quotes" data-toggle="collapse" class="arrow-r">
   <em class="fa fa-commenting-o"></em>
   <span>Settings</span>
   <i class="fa fa-angle-down rotate-icon"></i>
 </a>
 <ul id="quotes" class="nav sidebar-subnav collapse">
   <li class=" ">
    <a href="add-quotes.php" title="Create quotes">
     <span>Create Floor</span>
   </a>
 </li>
 <li class=" ">
  <a href="view-quotes.php" title="View quotes">
   <span>Create Room</span>
 </a>
</li>
</ul>
</li> 
</ul>

<!-- END sidebar nav-->
</nav>
</div>
<!-- END Sidebar (left)-->
</aside>
@yield('content')
          
      <!-- Page footer-->
      <footer>
         <span>&copy; <span id="demoyear"></span></span>
      </footer>
    </div>
   
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- JQUERY-->
   <script src="{{asset ('js/jquery.js')}}"></script>
   <!-- BOOTSTRAP-->
   <script src="{{asset('js/bootstrap.js')}}"></script>
   <!-- STORAGE API-->
   <script src="{{asset('js/jquery.storageapi.js')}}"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->

   <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>



     <!-- DATATABLES-->
    <script src="{{asset('js/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/datatables-colvis/js/dataTables.colVis.js')}}"></script>
    <script src="{{asset('js/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('js/datatables-buttons/js/dataTables.buttons.js')}}"></script>
    <script src="{{asset('js/datatables-buttons/js/buttons.bootstrap.js')}}"></script>
    <script src="{{asset('js/datatables-buttons/js/buttons.colVis.js')}}"></script>
    <script src="{{asset('js/datatables-buttons/js/buttons.flash.js')}}"></script>
    <script src="{{asset('js/datatables-buttons/js/buttons.html5.js')}}"></script>
    <script src="{{asset('js/datatables-buttons/js/buttons.print.js')}}"></script>
    <script src="{{asset('js/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('js/datatables-responsive/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('js/demo/demo-datatable.js')}}"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="{{asset('js/app.js')}}"></script>

                    


      <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
          
            <!-- Modal content-->
            <div class="modal-content" style="border-top: solid #0f7393 5px;">
              <div class="modal-body">
                <h3>Are you sure want to logout?</h3>
              </div>
              <div class="modal-footer">
                <a href="{{ route('logout')}}" class="btn btn-danger">Yes</a>
                <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
              </div>
            </div>
            
          </div>
        </div>

<script type="text/javascript">
  $('#status').change(function(event) {
    /* Act on the event */
    if($(this).val() == 'Decline')
    {
      $('#status-decline').modal();
    }
  });

 </script>

</script>


<!-- add more project_rewarded -->
    <div id="status-decline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
      <div class="modal-dialog ">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                  <span aria-hidden="true">&times;</span>
               </button>
               <h4 id="myModalLabel" class="modal-title">Reason for decline</h4>
            </div>
            <div class="modal-body">
                    <form class="form-horizontal" action="">
                      <div class="form-group" >
                        <div class="col-sm-12">
                           <label class="control-label">
                           Reason?
                           </label>
                          <textarea rows="3" class="form-control"  placeholder="Type..."></textarea>
                        </div>
                       
                     </div>
                      <div class="form-group ">
                        <div class="col-sm-12">
                           <button class="btn btn-sm btn-default" type="reset">Clear</button>
                           <button class="btn btn-sm btn-info" type="submit">Submit</button>

                        </div>
                     </div>
                     
                  </form>
                    </div>
                
            
         </div>
      </div>
   </div>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

</body>
</html>