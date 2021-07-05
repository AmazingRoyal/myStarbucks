<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;

class TransaksiIndex extends Component
{
    public $id_user;
    public $id_produk;
    public $jumlah;
    public $poin;
    public $harga;

    public function render()
    {
        return view('livewire.transaksi-index');
    }

    public function store()
    {
        $user = User::find($this->id_user);
        $user->update([
            'poin_total' => $user->poin_total + $this->poin,
        ]);

        Transaksi::create([
            'id_user' => $this->id_user,
            'id_produk' => $this->id_produk,
            'jumlah' => $this->jumlah,
            'poin' => $this->poin,
            'harga' => $this->harga,
        ]);

        $this->resetInput();
    }

    private function resetInput()
    {
        $this->id_user = null;
        $this->id_produk = 0;
        $this->jumlah = 0;
        $this->poin = 0;
        $this->harga = 0;
    }

    public function updated($key, $value)
    {
        if (in_array($key, ['id_produk', 'jumlah'])){
            $this->produk = Produk::where('id', $this->id_produk)->select('harga')->first();
            $this->harga = $this->produk->harga * $this->jumlah;
            $this->poin = $this->harga / 1000;
        }
    }
}
