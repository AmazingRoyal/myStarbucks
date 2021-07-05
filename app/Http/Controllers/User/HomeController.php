<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $transaksi = Transaksi::where('id_user', $id)->get();
        $poin_total = User::where('id', $id)->select('poin_total')->first();
        $name = User::find($id);
        // dd($transaksi);
        return view('user.profile')->with([
            'id_user'=>$id,
            'transaksi'=>$transaksi,
            'point_total'=>$poin_total->poin_total,
            'name'=>$name->name
            ]);
    }
}