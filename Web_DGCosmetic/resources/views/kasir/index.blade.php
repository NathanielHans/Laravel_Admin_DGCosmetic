@extends("layouts.admin")

@section("content")
<div class="card shadow mb-4 mx-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-lg">Tambah Produk</h6>
    </div>
    <div class="card-body border-left-primary">
        <form method="POST" action="/proses-transaksi" id="form-transaksi">
            @csrf
        
            <!-- Input untuk informasi transaksi (contoh: tanggal, pelanggan, dll.) -->
        
            <div id="barang-container">
                <!-- Input untuk barang pertama -->
                <div class="barang">
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

                    <input type="text" class="form-control mb-2 @error('hargaJual') is-invalid @enderror" id="hargaJual" name="hargaJual" placeholder="Harga Jual Produk" required>
                    @error('hargaJual')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="text" class="form-control mb-2 @error('jumlahBarang') is-invalid @enderror" id="jumlahBarang" name="jumlahBarang" placeholder="Jumlah Produk" required>
                    @error('jumlahBarang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        
            <button type="button" id="tambah-barang">Tambah Barang</button>
            <button type="submit">Proses Transaksi</button>
        </form>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        var counter = 1;

        $("#tambah-barang").click(function(){
            counter++;

            var newBarang = `
            <div class="barang">
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

                    <input type="text" class="form-control mb-2 @error('hargaJual') is-invalid @enderror" id="hargaJual" name="hargaJual" placeholder="Harga Jual Produk" required>
                    @error('hargaJual')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="text" class="form-control mb-2 @error('jumlahBarang') is-invalid @enderror" id="jumlahBarang" name="jumlahBarang" placeholder="Jumlah Produk" required>
                    @error('jumlahBarang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            `;

            $("#barang-container").append(newBarang);
        });
    });
</script>
{{-- Route::get('/get-produk-by-barcode/{barcode}', 'ProdukController@getProdukByBarcode'); --}}
<script>
    $(document).ready(function(){
        $('#barcode').on('change', function(){
            var barcode = $(this).val();

            // Lakukan AJAX request ke server untuk mendapatkan data produk berdasarkan barcode
            $.ajax({
                url: '/get-produk-by-barcode/' + barcode,
                type: 'GET',
                success: function(data) {
                    // Isi otomatis nama produk dan harga produk berdasarkan respons dari server
                    $('#produk').val(data.nama_produk);
                    $('#hargaJual').val(data.harga_jual);
                },
                error: function(response) {
                    // Handle error jika diperlukan
                    console.error(response.responseJSON.error);
                }
            });
        });
    });
</script>

@endsection