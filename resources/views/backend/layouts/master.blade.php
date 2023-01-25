<!-- Prijungtas admin šablonas, footer ir header failuose pakeisti keliai: admin/template/ -->
@include('backend.layouts.header')
@include('backend.layouts.sidebar')
@yield('content')
@include('backend.layouts.footer')