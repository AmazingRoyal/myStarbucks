@extends('layouts.master')

@section('content')
<link href="{{ asset('css/sidenav.css') }}" rel="stylesheet"/>

    <!-- SideNav -->
    <div class="sidenav">
        <a href="{{route('admin.home')}}" id="sidenav-active"><i class="fas fa-th-large me-2"></i> Dashboard</a>
        <a href=""><i class="fas fa-box me-2"></i> Input Transaksi</a>
        <a href=""><i class="fas fa-box me-2"></i> History</a>
    </div>

    <div class="main">        


    </div>


@endsection