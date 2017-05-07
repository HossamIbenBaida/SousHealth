<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('partial.head')
<body>
  @include('partial.header')
  @yield('content')
  @include('partial.footer')
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
