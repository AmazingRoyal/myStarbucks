@extends('layouts.master')

@section('content')
<link href="{{ asset('css/sidenav.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet"/>

    <!-- SideNav -->
    <div class="sidenav">
        <a href="{{route('admin.home')}}" id="sidenav-active"><i class="fas fa-th-large me-2"></i> Dashboard</a>
        <a href="{{route('admin.input')}}"><i class="fas fa-shopping-cart me-2"></i> Input Transaksi</a>
    </div>

    <div class="main">

        <!-- Hightlight Box -->
        <div class="container">
            <div class="dashboard-content">

                <livewire:dashboard/>
            </div>
        </div>

    </div>


@endsection