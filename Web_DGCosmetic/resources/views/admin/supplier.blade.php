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
                    <form action="/admin/supplier" method="post">
                        @csrf
                        <div class="form-group pt-4">
                            <input type="text" class="form-control @error('supplier') is-invalid @enderror" id="supplier" name="supplier" placeholder="  Nama Supplier" required>
                                @error('supplier')
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
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $supplier->supplier }}</td>
                            <td>
                                <form action="/admin/supplier/{{ $supplier->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                    <button type="button" class="btn btn-warning btn-circle btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="fas fa-pencil"></i>
                                    </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Supplier</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                </div>
                                <div class="modal-body">
                                    <form action="/admin/supplier/{{ $supplier->id }}" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="form-group pt-4">
                                            <input type="text" class="form-control @error('supplier') is-invalid @enderror" id="supplier" name="supplier" placeholder="  Nama Supplier" value="{{ $supplier->supplier }}" required>
                                                @error('supplier')
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
                                            <span class="text">Edit Supplier</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection