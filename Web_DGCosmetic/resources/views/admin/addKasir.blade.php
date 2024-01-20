@extends("layouts.admin")

@section("content")
<div class="card shadow mb-4 mx-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-lg">Tambah Produk</h6>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="card-body border-left-primary">
        <form action="/admin/kasir" method="post">
            @csrf
            <div class="form-group pt-4">
                <input type="text" class="form-control mb-2 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" class="form-control mb-2 @error('telepon') is-invalid @enderror" id="telepon" name="telepon"
                placeholder="Nomor Telepon" required>
                @error('telepon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <input type="text" class="form-control mb-2 @error('email') is-invalid @enderror" id="ownerEmail" name="email" placeholder="Email" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" class="form-control mb-2 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password"
                required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="role">Role</label>
                    </div>
                    <select class="custom-select @error('role') is-invalid @enderror" id="role" name="role" required>
                        <option selected disabled>Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                    </select>
                    @error('role')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">Tambah User Kasir</span>
                </button> 
            </div>
        </form>
        
    </div>
</div>
@endsection