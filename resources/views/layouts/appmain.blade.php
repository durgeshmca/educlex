@include('inc.header')
@include('inc.main_header')
@include('inc.intro')
<!-- BEGIN MAIN LAYOUT -->
<div class="page-content">
  @yield('content')
</div>
<!-- END MAIN LAYOUT -->
@include('inc.footer')
