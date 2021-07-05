@extends('layouts.master')

@section('content')
<link href="{{ asset('/css/homepage.css') }}" rel="stylesheet">

    <div class="container main-content">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="header-nama">Mocha Frappuccino</h1>
                <h2 class="header-harga">Rp 59.000</h2>
                <p class="header-deskripsi">
                    For serious chocolate lovers: We blend dark cocoa with milk,
                    ice and coffee for an extraordinarily chocolatey experience
                    that's then topped with a swirl of whipped cream.
                </p>
            </div>
            <div class="col header-menu">
                <img src="{{ asset('/menu-1.png') }}" alt="" srcset="" class="header-menu">
            </div>
        </div>

        <div class="menu-container">
            <h1 class="header-nama">Great-Tasting Beverages</h1>
            <div class="container">
                <div class="row">
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-7.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Strawberries Frappuccino</p>
                                <p class="card-text">Blended Cream</p>
                                <p class="card-harga">Rp 52.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-8.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Green Tea Frappuccino</p>
                                <p class="card-text">Blended Cream</p>
                                <p class="card-harga">Rp 52.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-9.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Vanilla Frappuccino</p>
                                <p class="card-text">Blended Cream</p>
                                <p class="card-harga">Rp 50.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-4.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Caramel Macchiato</p>
                                <p class="card-text">Brewed Coffee</p>
                                <p class="card-harga">Rp 57.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-5.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Caramel Frappuccino</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 55.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-6.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Caffe Mocha</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 52.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-1a.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Green Tea Latte</p>
                                <p class="card-text">Iced Beverages</p>
                                <p class="card-harga">Rp 45.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-2a.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Shaken Lemon Tea</p>
                                <p class="card-text">Iced Beverages</p>
                                <p class="card-harga">Rp 42.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-3a.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Raspberry Blackcurrant</p>
                                <p class="card-text">Blended Juice</p>
                                <p class="card-harga">Rp 48.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
