<header class="main-header">
        <!-- Logo -->
        <a href="admin/dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Menu</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin Menu</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="javascript:void(0);" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
            <notificationscomponent :user="{{ $user }}"></notificationscomponent>
        </nav>
      </header>

