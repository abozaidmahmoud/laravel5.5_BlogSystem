<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, {{request()->session()->get('username')}}</p>
                        </div>
                    </div>
                  
                    <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="active treeview">
         
          <ul class="treeview-menu">
            <li><a href="{{url('admin/post')}}"><i class="fa fa-circle-o"></i>Posts</a></li>
            <li class=""><a href="{{url('admin/cateogery')}}"><i class="fa fa-circle-o"></i> Cateogeries</a></li>
            <li class=""><a href="{{url('admin/tag')}}"><i class="fa fa-circle-o"></i> Tags</a></li>
            <li class=""><a href="{{url('admin/member/show')}}"><i class="fa fa-circle-o"></i>Users</a> </li>
          </ul>
        </li>

    </ul>    
    </section>
    </aside>
    </div>
                     