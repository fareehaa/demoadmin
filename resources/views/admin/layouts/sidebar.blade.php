<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          
        </li>
      <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o text-red"></i> <span>Category</span></a></li>
      <li><a href="{{route('tag.index')}}"><i class="fa fa-circle-o text-red"></i> <span>Tag</span></a></li>
        <li><a href="{{route('post.index')}}"><i class="fa fa-circle-o text-aqua"></i> <span> Post</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Add client</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Add Project</span></a></li>
      
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Add User</span></a></li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        
        <li><a href=""><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
