<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Produk;

class Dashboard extends Component
{
    public $jumlah_transaksi;
    public $revenue;
    public $transaksi;
    public $produk;
    public $jumlah_produk;

    public function render()
    {
        $this->jumlah_transaksi = Transaksi::count();
        $this->transaksi = Transaksi::all()->reverse()->values();
        $this->produk = Produk::all();
        $this->revenue = Transaksi::all()->sum('harga');
        $this->jumlah_produk = Transaksi::all()->sum('jumlah');
        return view('livewire.dashboard');
    }
}
