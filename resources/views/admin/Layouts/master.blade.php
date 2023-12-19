<!doctype html>
<html lang="en">
  <head>
@include('admin.partials.head')
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        @include('admin.partials.navbar')
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        @include('admin.partials.sidebar')

      </aside>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">

          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@yield('body')
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('admin.partials.scripts')
  </body>
</html>
