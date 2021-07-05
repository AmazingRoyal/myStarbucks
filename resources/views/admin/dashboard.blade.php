@extends('layouts.master')

@section('content')
<link href="{{ asset('css/sidenav.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet"/>

    <!-- SideNav -->
    <div class="sidenav">
        <a href="{{route('admin.home')}}" id="sidenav-active"><i class="fas fa-th-large me-2"></i> Dashboard</a>
        <a href="{{route('admin.input')}}"><i class="fas fa-shopping-cart me-2"></i> Input Transaksi</a>
        <a href=""><i class="fas fa-box me-2"></i> History</a>
    </div>

    <div class="main">

        <!-- Hightlight Box -->
        <div class="container">
            <div class="dashboard-content">

                <div class='row'>
                    <div class='col'>
                        <div class="card shadow dashboard-card">
                            <div class="card-body">
                                <p class='card-text'>Total Transaksi</p>
                                <div class="row">
                                    <i class="fas fa-shopping-cart highlight-icon"></i>
                                    <p class='card-highlight'>125</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class="card shadow dashboard-card">
                            <div class="card-body">
                                <p class='card-text'>Jumlah Revenue</p>
                                <div class="row">
                                    <i class="fas fa-money-bill-wave-alt highlight-icon"></i>
                                    <p class='card-highlight'>Rp. 825000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection