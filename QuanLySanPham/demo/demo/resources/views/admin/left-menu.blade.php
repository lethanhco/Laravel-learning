<div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://scontent.fsgn5-12.fna.fbcdn.net/v/t39.30808-6/274495184_640205503856410_5153247310286751747_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=Mipk75qP-UAAX-hBKd_&_nc_oc=AQkprgmb_bAQ0HqkpVyrAm-2wDGidkt3CDrLf7N6k_9ReGFiW_vszNpjn2RRN3HVsXY&_nc_ht=scontent.fsgn5-12.fna&oh=00_AfDaG9M6JKauGGlg44JqgLEGDKBpcfYCWglanMSkWJ8LaA&oe=64609BD5" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?=$user->name?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('listing.index', ['model'=>'Menu'])}}">Danh mục</a></li>
                      <li><a href="{{route('listing.index', ['model'=>'News'])}}">Tin tức</a></li>
                      <li><a href="{{route('listing.index', ['model'=>'Product'])}}">Sản phẩm</a></li>
                      <li><a href="{{route('listing.index', ['model'=>'Order'])}}">Đơn hàng</a></li>
                      <li><a href="{{route('listing.index', ['model'=>'Admin'])}}">Thành viên</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->