@extends('layouts.master')

@section('content')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet"/>

<div class="container">
    <div class="row profile-content">
        <div class="col">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="row card-head">
                        <h1 class="card-title">My Loyalty Points</h1>
                    </div>
                    <div class="row card-content">
                        <i class="card-icon"></i>
                        <p class="card-points">{{$point_total}}</p>
                        <p class="card-points-text">points</p>
                    </div>
                    <div class="garis-putus"></div>
                    <div class="row card-desc">
                        <div class="card-name">{{$name}}</div>
                        <p class="card-id">ID {{$id_user}}</p>
                    </div>
                </div>
            </div>

            <div class="card card-secondary">
                <div class="card-body">
                    <div class="row card-head-2">
                        Get More Points
                    </div>
                    <div class="card-secondary-text">
                        When you buy more Starbucks menu, you will get more points
                    </div>
                    <a href="/" class="btn btn-large card-secondary-btn">
                        View Great-Tasting Beverages
                    </a>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="history-section">
                <h1 class="history-title">Transaction History</h1>
                @foreach ($transaksi as $key => $data)                        
                    <div class="history">
                        <div class="row">
                            <div class="col history-id">TID {{$data->id}}</div>
                            <div class="col history-points">+ Points {{$data->poin}}</div>
                        </div>
                        <div class="row">
                            <div class="col history-tanggal">{{substr($data->created_at, 0, 10)}}</div>
                            <div class="col history-harga">Rp. {{$data->harga}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection