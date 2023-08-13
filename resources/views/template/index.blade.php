
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title-page')
  @include('template.dist.stylesheet')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('template.navbar.admin')
        @include('template.sidebar.admin')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('template.footer')
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    @include('template.dist.script')
</body>
</html>
