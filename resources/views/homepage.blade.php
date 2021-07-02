@extends('layouts.master')

@section('content')
<link href="{{ asset('/css/homepage.css') }}" rel="stylesheet">

    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="header-nama">Mocha Frrappuchino</h1>
                <h2 class="header-harga">Rp 47.000</h2>
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
                            <img src="{{ asset('/menu-1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Mocha Frrappuchino</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 47.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Mocha Frrappuchino</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 47.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Mocha Frrappuchino</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 47.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Mocha Frrappuchino</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 47.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Mocha Frrappuchino</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 47.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col home-menu">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/menu-3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-menu">Mocha Frrappuchino</p>
                                <p class="card-text">Blended Coffee</p>
                                <p class="card-harga">Rp 47.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection