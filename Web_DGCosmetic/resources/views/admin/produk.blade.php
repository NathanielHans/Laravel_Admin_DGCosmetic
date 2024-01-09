@extends("layouts.admin")

@section("content")
{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori Produk</h1>
</div> --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Produk</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/admin/addProduk" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Tambah Produk</span>
            </a>
        </div>
        {{-- Tabel --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Barang</th>
                            <th>Barcode</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stock Barang</th>
                            <th>Supplier</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SK001</td>
                            <td>1382341</td>
                            <td>Masker Muka</td>
                            <td>Skin Care</td>
                            <td>Rp.10.000</td>
                            <td>Rp.15.000</td>
                            <td>50</td>
                            <td>PT. Mencari Cinta</td>
                            <td>Hapus/Edit</td>
                        </tr>    
                        <tr>
                            <td>SK001</td>
                            <td>1382341</td>
                            <td>Masker Muka</td>
                            <td>Skin Care</td>
                            <td>Rp.10.000</td>
                            <td>Rp.15.000</td>
                            <td>50</td>
                            <td>PT. Mencari Cinta</td>
                            <td>Hapus/Edit</td>
                        </tr>    
                        <tr>
                            <td>SK001</td>
                            <td>1382341</td>
                            <td>Masker Muka</td>
                            <td>Skin Care</td>
                            <td>Rp.10.000</td>
                            <td>Rp.15.000</td>
                            <td>50</td>
                            <td>PT. Mencari Cinta</td>
                            <td>Hapus/Edit</td>
                        </tr>    
                        <tr>
                            <td>SK001</td>
                            <td>1382341</td>
                            <td>Masker Muka</td>
                            <td>Skin Care</td>
                            <td>Rp.10.000</td>
                            <td>Rp.15.000</td>
                            <td>50</td>
                            <td>PT. Mencari Cinta</td>
                            <td>Hapus/Edit</td>
                        </tr>    
                        <tr>
                            <td>SK001</td>
                            <td>1382341</td>
                            <td>Masker Muka</td>
                            <td>Skin Care</td>
                            <td>Rp.10.000</td>
                            <td>Rp.15.000</td>
                            <td>50</td>
                            <td>PT. Mencari Cinta</td>
                            <td>Hapus/Edit</td>
                        </tr>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection