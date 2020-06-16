@extends('layouts.app')
@section('content')
    @include('banner_small')
    <div class="outer-container bg-main" id="product-container">
        <div class="container d-flex flex-row flex-wrap">
            <div class="product-page-content order-0" id="product-image-container">
                <div class="product-image-wrapper">
                    <div class="product-page-image" style="background-image:url('{{asset('images/products/1/witcher3.png')}}');">

                    </div>
                </div>
            </div>
            <div class="line-wrapper order-1">
                <div class="product-page-mini-line"></div>
            </div>
            <div class="product-page-content px-5 order-2 bg-main" id="product-text-wrapper">
                <p class="h2 text-white text-wrap pb-2"><b>WITCHER 3 COMPLETE EDITION</b></p>
                <p class="text-white text-wrap pb-2">Game of the Year Edition sisaldab endas palju auhindu võitnud Witcher 3
                    põhimängu - üle 250 Aasta Parima Mängu tiitli ja 2015. aasta kõige kiidetum mäng, mis on võitnud
                    rohkem kui 800 auhinda kokku! Lisaks veel mõlemad laienduspakid Hearts of Stone ja Blood and Wine
                    ning kõik ametlikud allalaetavad lisad, uuendused ja arendused.
                </p>
                <p class="h2 text-white text-wrap pb-4">
                    5€
                </p>
                    <button class="btn btn-main btn-lg prod-btn order-1 addTo" onclick="addToCart(1)">
                        <b>Lisa ostukorvi</b>
                    </button>
            </div>
        </div>
    </div>
    <div class="outer-container bg-main py-5">
        <div class="container pb-4">
            <p class="h1 text-white text-center pb-lg-4 pb-sm-2 big-section-text">DETAILNE INFORMATSIOON</p>
            <div class="big-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <p class="h3 text-white pb-3">Mängu omadused:</p>
                    <table class="table custom-table-border text-white">
                        <tbody>
                        <tr>
                            <th>Mängu liik:</th>
                            <td>inglise</td>
                        </tr>
                        <tr>
                            <th>Mängu keel</th>
                            <td>üksikmäng</td>
                        </tr>
                        <tr>
                            <th>Mängu tüüp:</th>
                            <td>üksikmäng</td>
                        </tr>
                        <tr>
                            <th>PEGI vanuse reiting:</th>
                            <td>Soovitatav alates 18. eluaastast</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <p class="h3 text-white pb-3">Üldised omadused:</p>
                    <table class="table custom-table-border text-white">
                        <tbody>
                        <tr>
                            <th>Platform:</th>
                            <td>PlayStation 4</td>
                        </tr>
                        <tr>
                            <th>Turustaja:</th>
                            <td>Jüri Pärnust</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid inShopBanner" style="background-image:url('{{asset('images/banners/INNER_BANNER.jpg')}}')">
        <div class="bannerDarkener">
            <div class="container inShopBanner_ButtonContainer">
                <a href="/" class="btn btn-lg btn-main inShopBanner_Button rounded-0">
                    <b>Tagasi poodi</b>
                </a>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
