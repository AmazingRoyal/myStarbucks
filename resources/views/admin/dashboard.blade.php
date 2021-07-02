@extends('layouts.master')

@section('content')
<link href="{{ asset('css/sidenav.css') }}" rel="stylesheet"/>

    <!-- SideNav -->
    <div class="sidenav">
        <a href="" id="sidenav-active"><i class="fas fa-th-large me-2"></i> Dashboard</a>
        <a href=""><i class="fas fa-box me-2"></i> Input Transaksi</a>
        <a href=""><i class="fas fa-box me-2"></i> History</a>
    </div>

    <div class="main">

        <!-- Hightlight Box -->
        <div class='row'>
            <div class='col'>
                <div class="card shadow">
                    <div class="card-body">
                        <p class='card-highlight purple'></p>
                        <p class='card-text'>Total Stocks</p>
                    </div>
                </div>
            </div>
            <div class='col'>
                <div class="card shadow">
                    <div class="card-body">
                        <p class='card-highlight green'></p>
                        <p class='card-text'>Number of Check In</p>
                    </div>
                </div>
            </div>
            <div class='col'>
                <div class="card shadow">
                    <div class="card-body">
                        <p class='card-highlight red'></p>
                        <p class='card-text'>Number of Check Out</p>
                    </div>
                </div>
            </div>
            <div class='col'>
                <div class="card shadow">
                    <div class="card-body">
                        <p class='card-highlight grey'></p>
                        <p class='card-text'>Total Suppliers</p>
                    </div>
                </div>
            </div>
        </div>

        


    </div>


@endsection