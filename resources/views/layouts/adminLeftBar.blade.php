<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/admin_inc/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::guard('admin')->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="/admin/dashboard">
                    <i class="fa fa-dashboard text-blue"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="header">Categories & Resources</li>            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server text-red"></i>
                    <span>Policy Categories</span>
                    <span class="pull-right-container">
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.all.categories')}}">
                    <i class="fa fa-circle-o"></i> All Categories</a>
                    </li>
                    <li><a href="{{route('admin.new.category')}}">
                    <i class="fa fa-circle-o"></i> New Category</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server text-red"></i>
                    <span>Policy Sub-Categories</span>
                    <span class="pull-right-container">
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.all.subcategories')}}">
                    <i class="fa fa-circle-o"></i> All Sub-Categories</a>
                    </li>
                    <li><a href="{{route('admin.new.subcategory')}}">
                    <i class="fa fa-circle-o"></i> New Sub-Category</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server text-red"></i>
                    <span>Policy Types</span>
                    <span class="pull-right-container">
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.all.types')}}">
                    <i class="fa fa-circle-o"></i> Types</a>
                    </li>
                    <li><a href="{{route('admin.new.type')}}">
                    <i class="fa fa-circle-o"></i> New Types</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sliders text-yellow"></i>
                    <span>Resources</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.all.resources')}}">
                    <i class="fa fa-circle-o"></i> All Resources</a></li>
                    <li><a href="{{route('admin.new.resource')}}">
                    <i class="fa fa-circle-o"></i> New Resource</a></li>
                </ul>
            </li>
            <li class="header">Policies</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-green"></i>
                    <span>Policies</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">>></span>
            </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{route('admin.new.policy')}}">
                      <i class="fa fa-circle-o"></i> New Policies</a></li>
                    <li><a href="{{route('admin.all.policies')}}">
                      <i class="fa fa-circle-o"></i> All Policies</a></li>
                    <li><a href="{{route('admin.pending.policies')}}">
                      <i class="fa fa-circle-o"></i> Pending</a></li>
                    <li><a href="{{route('admin.suspended.policies')}}">
                      <i class="fa fa-circle-o"></i> Suspended</a>
                    </li>
                </ul>
            </li>
            <li class="header">Resources</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-microphone text-green"></i>
                    <span>Podcasts</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{route('admin.new.podcast')}}">
                      <i class="fa fa-circle-o"></i> New Podcast</a></li>
                    <li><a href="{{route('admin.all.podcasts')}}">
                      <i class="fa fa-circle-o"></i> All Podcasts</a></li>
                </ul>
            </li>
            <li class="header">Admins & Users</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users text-orange"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/users"><i class="fa fa-circle-o"></i> All Users</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Suspended</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bookmark text-white"></i>
                    <span>Blog Posts</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.blog.list')}}">
                            <i class="fa fa-circle-o"></i> All posts</a></li>
                    <li><a href="{{route('admin.create.post.form')}}">
                            <i class="fa fa-circle-o"></i> New Blog Post</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope text-white"></i>
                    <span>Newsletters</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.subscribers.listings')}}">
                            <i class="fa fa-circle-o"></i> Subscribers</a>
                    </li>
                    <li><a href="{{route('admin.create.news.letter.form')}}">
                            <i class="fa fa-circle-o"></i> New
                            Letter</a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-envelope text-purple"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                </a>
            </li>
            
            <li><a href="/"><i class="fa fa-home text-aqua"></i> <span>Home Page</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
