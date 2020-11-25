@php
    $menu = App\Menu::all()->toArray();
@endphp

@extends('master')

@section('content')
<!-- 404 -->
<section id="page-not-found" style="background-image: url('{{ asset('images/products/couches/couch5.jpg') }}');">
        <div class="container">
            <div class="text-wrap text-center">
                <div class="page-header text-center space-top-30">
                    <h1><i class="lnr lnr-warning"></i>OOPS 404!</h1>
                </div><!-- / page-header -->
                <p class="large-p" style="color:black">Page Not Found!</p>
                <p class="space-top-2x"><a href="{{ url('/') }}" class="btn btn-default-filled btn-rounded"><i class="fas fa-arrow-circle-left"></i><span>Back to Homepage</span></a></p>
            </div><!-- / text-wrap -->
        </div><!-- / container -->
    </section>
    <!-- / 404 -->
@endsection 