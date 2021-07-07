<div>
    <div class='row'>
                    <div class='col'>
                        <div class="card shadow dashboard-card">
                            <div class="card-body">
                                <p class='card-text'>Total Transaksi</p>
                                <div class="row">
                                    <i class="fas fa-shopping-cart highlight-icon"></i>
                                    <p class='card-highlight'>{{$jumlah_transaksi}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class="card shadow dashboard-card">
                            <div class="card-body">
                                <p class='card-text'>Produk Terjual</p>
                                <div class="row">
                                    <i class="fas fa-coffee highlight-icon"></i>
                                    <p class='card-highlight'>{{$jumlah_produk}}</p>
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
                                    <p class='card-highlight'>Rp. {{$revenue}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row history-transaction">
                    <h2 class="dashboard-title">History Transaksi</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $data)     
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$produk[$data->id_produk-1]->nama_produk}}</td>
                                    <td>{{$data->jumlah}}</td>
                                    <td>{{$data->harga}}</td>
                                    <td>{{$data->created_at}}</td>
                                </tr>                   
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
</div>
