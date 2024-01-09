@extends("layouts.admin")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Supplier Produk</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary btn-icon-split" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Tambah Supplier</span>
              </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Supplier</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-group pt-4">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="  Nama Supplier" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Supplier</span>
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        {{-- End Modal --}}
        {{-- Tabel --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Supplier</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PT. Aksara</td>
                            <td>Hapus/Edit</td>
                        </tr>    
                        <tr>
                            <td>2</td>
                            <td>PT. Manca</td>
                            <td>Hapus/Edit</td>
                        </tr>    
                        <tr>
                            <td>3</td>
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