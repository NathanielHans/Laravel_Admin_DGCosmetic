@extends("layouts.admin")

@section("content")
<div class="card shadow mb-4 mx-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-lg">Tambah Produk</h6>
    </div>
    <div class="card-body border-left-primary">
        <form action="/admin/addProduk" method="post">
            @csrf
            <div class="form-group pt-4">
                <input type="text" class="form-control mb-2 @error('barcode') is-invalid @enderror" id="barcode" name="barcode" placeholder="Barcode" required>
                @error('barcode')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <input type="text" class="form-control mb-2 @error('produk') is-invalid @enderror" id="produk" name="produk" placeholder="Nama Produk" required>
                @error('produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="kategori_produk">Kategori</label>
                    </div>
                    <select class="custom-select @error('kategori_produk') is-invalid @enderror" id="kategori_produk" name="kategori_produk" required>
                        <option selected disabled>Pilih Kategori</option>
                        @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                        @endforeach
                    </select>
                    @error('kategori_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <input type="text" class="form-control mb-2 @error('hargaBeli') is-invalid @enderror" id="hargaBeli" name="hargaBeli" placeholder="Harga Beli Produk" required>
                @error('hargaBeli')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <input type="text" class="form-control mb-2 @error('hargaJual') is-invalid @enderror" id="hargaJual" name="hargaJual" placeholder="Harga Jual Produk" required>
                @error('hargaJual')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <input type="text" class="form-control mb-2 @error('stockBarang') is-invalid @enderror" id="stockBarang" name="stockBarang" placeholder="Stock Produk" required>
                @error('stockBarang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="supplier_produk">Supplier</label>
                    </div>
                    <select class="custom-select @error('supplier_produk') is-invalid @enderror" id="supplier_produk" name="supplier_produk" required>
                        <option selected disabled>Pilih Supplier</option>
                        @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->supplier }}</option>
                        @endforeach
                    </select>
                    @error('supplier_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Produk</span>
                </button> 
            </div>
        </form>
        
    </div>
</div>
@endsection