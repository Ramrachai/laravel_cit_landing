@extends('layouts.backend')
@section('content')
    @include('backend.leftsidebar')
<!-- ====================================
    ——— PAGE WRAPPER
===================================== -->
    <div class="page-wrapper">
        @include('backend.topnav')
        <!-- ====================================
                ——— CONTENT WRAPPER
                ===================================== -->
        <div class="content-wrapper">
            <div class="content">
                @yield('contents')
            </div>
            <!-- End Content -->
        </div>
        <!-- End Content Wrapper -->
    </div>
<!-- End Page Wrapper -->
@endsection