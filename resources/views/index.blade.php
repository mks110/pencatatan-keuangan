
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- HEAD -->
    @include('layouts.head')

  </head>
  <body>
    <!-- .app -->
    <div class="app">
      @include('layouts.header')
      @include('layouts.sidebar')
      <!-- .app-main -->
      @yield('content')
      <!-- /.app-main -->
    </div>
    <!-- /.app -->
    {{-- SCRIPT --}}
    @include('layouts.script')
  </body>
</html>