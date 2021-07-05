<?php

namespace App\Http\Livewire\InvoiceDetail;

use Livewire\Component;
use App\Models\Produk;

class Create extends Component
{
    public $data;

    public $id_user;

    public function render()
    {
        $this->data = Produk::all();
        return view('livewire.invoice-detail.create');
    }
}
