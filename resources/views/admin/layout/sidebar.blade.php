<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('home')}}" class="site_title"> <i class="fas fa-shopping-cart"></i> <span>Big Bazzar</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->


            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li class=""><a><i class="fa fa-folder"></i>Category Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="{{route('category.list')}}">List</a></li>
                      <li><a href="{{route('category.create')}}">Create</a></li>
                    </ul>
                  </li>
                  <li class=""><a> <i class="fa fa-cube"></i>Product Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="{{route('product.list')}}">List</a></li>
                      <li><a href="{{route('product.create')}}">Create</a></li>
                    </ul>
                  </li>
                  <li class=""><a> <i class="fa fa-user"></i>User Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="{{route('admin.users')}}">List</a></li>
                    </ul>
                  </li>
                  <li class=""><a> <i class="fa fa-check-circle"></i>Booking Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="{{route('booking.products')}}">List</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('admin.logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
