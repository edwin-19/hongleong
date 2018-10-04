<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('layouts.head')

    <!-- yield view styles here -->
		@yield('view-styles')
  </head>

  <body>
    <!-- Include NAV HERE -->

    @yield('content')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @include('layouts.global-scripts')
    <!-- yield view scripts here -->
    @yield('view-scripts')
  </body>
</html>
