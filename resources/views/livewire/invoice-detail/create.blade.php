<div>
    @foreach ($data as $produk)                        
        <option value={{$produk->id}} >{{$produk->nama_produk}}</option>
    @endforeach
</div>
