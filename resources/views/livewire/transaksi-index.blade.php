<div>
    <form wire:submit.prevent="store">
        <h1 class="card-head">Input Transaksi</h1>
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group row">
                    <div class="col">
                        <div class="input-group">
                            <i class="fas fa-user input-icon"></i>
                            <input wire:model="id_user" id="id_user" type="text" placeholder="ID Member" class="form-control" name="id_user" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col input-kiri">
                        <div class="input-group input-kiri">
                            <i class="fas fa-shopping-cart input-icon"></i>
                            <select wire:model="id_produk" class="form-select form-control" id="id_produk" name="id_produk" aria-label="Select Product">
                                <option value=0 >Please Select</option>
                                <option value=1 >Mocha Frappuccino</option>
                                <option value=2 >Iced Citrus Mint Tea</option>
                                <option value=3 >Strawberries Frappuccino</option>
                                <option value=4 >Green Tea Frappuccino</option>
                                <option value=5 >Vanilla Frappuccino</option>
                                <option value=6 >Caramel Macchiato</option>
                                <option value=7 >Caramel Frappuccino</option>
                                <option value=8 >Caffe Mocha</option>
                                <option value=9 >Green Tea Latte </option>
                                <option value=10 >Shaken Lemon Tea</option>
                                <option value=11 >Rasberry Blackcurrant</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-lg-4 input-kanan">
                        <div class="input-group jumlah-section input-kanan">
                            <i class="fas fa-plus input-icon"></i>
                            <input wire:model="jumlah" id="jumlah" type="number" placeholder="0" class="form-control" name="jumlah" required >
                        </div>
                    </div>
                 </div>
        
                <div class="desc-section">
                    <div class="row harga-section">
                        <div class="col col-md-auto rp">Rp.</div>
                        <div class="col">
                            <input wire:model="harga" class="form-control total-harga" type="number" value="0" id="total_harga">
                            <div class="total-harga-copy" wire:model="harga">
                                {{$harga}}
                            </div>
                        </div>
                    </div>
                    <div class="row harga-section">
                        <div class="col col-lg-2 poin">Point</div>
                        <div class="col">
                            <input wire:model="poin" class="form-control total-poin" type="number" value="0" id="total_poin">
                            <div class="poin-copy" wire:model="poin">
                                +{{$poin}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col center">
                        <button type="submit" class="btn btn-large">
                            INPUT
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-auto transaction-img-wrapper">
                <img src="{{asset('img/shop.svg')}}" alt="ilustrasi pendaftaran" class='transaction-img' />
            </div>
        </div>
    
    </form> 
</div>
