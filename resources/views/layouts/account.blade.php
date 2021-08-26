<!DOCTYPE html>
<html lang="en">
<head>

@include('partials.admin.head')
@include('partials.admin.account-css')
<!-- Bootstrap -->

</head>
<body class="sidebar-dark">
<div class="main-wrapper">


<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->

<!-- Navbar STart -->
@include('sections.admin.account-sidebar')

<!--end header-->
<!-- Navbar End -->

<!-- Start Hero -->
    <div class="page-wrapper">
        @include('sections.admin.account-navbar')
        <div class="page-content">
            @yield('content')


        </div>
        @include('sections.admin.footer')
    </div>

<!--end section-->
<!-- End -->

<!-- Footer Start -->


<!--end footer-->
<!-- Footer End -->


<!-- javascript -->
<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</div>
@include('partials.admin.script')
</body>


</html>
