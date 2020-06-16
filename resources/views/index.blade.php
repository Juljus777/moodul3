@extends('layouts.app')
@section('content')
    @include('banner')
    <div class="outer-container bg-main pt-lg-5 pt-sm-4 pt-4">
        <div class="container d-flex d-column">
            <div class="outer-container order-0">
                <div class="outer-container mb-4">
                    <p class="text-white text-center h1 pb-lg-4 pb-sm-2 big-section-text"><b>UUED TOOTED</b></p>
                    <div class="big-line"></div>
                </div>
                <div class="outer-container d-flex flex-row flex-wrap">
                    @include('product')
                    @include('product')
                    @include('product')
                </div>
                <div class="outer-container order-1">
                    <div class="outer-container mb-4">
                        <p class="text-white text-center h1 pb-lg-4 pb-sm-2 big-section-text"><b>TOODETE GALERII</b></p>
                        <div class="big-line"></div>
                    </div>
                    <div class="outer-container d-flex flex-row flex-wrap">
                        @include('product')
                        @include('product')
                        @include('product')
                        @include('product')
                        @include('product')
                        @include('product')
                        @include('product')
                        @include('product')
                        @include('product')
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid inShopBanner mt-4" style="background-image:url('{{asset('images/banners/INNER_BANNER.jpg')}}')">
            <div class="bannerDarkener">
                <div class="container inShopBanner_ButtonContainer">
                    <button class="class=btn btn-lg btn-main inShopBanner_Button rounded-0" onclick="scrollToTop()">
                        <b>Tagasi üles</b>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
