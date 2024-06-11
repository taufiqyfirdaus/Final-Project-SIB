@extends('layout.admin')
@section('title', 'Tambah Data Guru')

@section('content')

    <div class="container-fluid z-0">
        <div class="row">
            <div class="col-lg-9 col-md-8 offset-lg-2 offset-md-3 ml-sm-auto col-lg-10 px-md-4 py-4">
                <h2 class="fw-medium h2"><u>Tambah Data pengguna (Superadmin)</u></h2>
            </div>
            <div class="col-lg-9 offset-lg-3 col-md-8 offset-md-4 d-flex mt-4 mb-2">
                <form action="{{ route('storeDataPengguna') }}" id="userForm" method="post" class="w-75">
                    @csrf
                    <div class="mb-3 ">
                        <label for="name" class="form-label">Nama
                        </label>
                        <input type="text" class="form-control border border-dark {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Masukkan nama admin"
                            value="{{ old('name') }}" />
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                <b>{{ $errors->first('name') }}</b>
                            </div>
                        @endif
                    </div>
                    <div class="d-flex gap-1 justify-content-between mt-3">
                        <div class="mb-3 col-5 ">
                            <label for="email" class="form-label">Email
                            </label>
                            <input type="email" class="form-control border border-dark {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="Masukkan email admin" value="{{ old('email') }}"/>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    <b>{{ $errors->first('email') }}</b>
                                </div>
                            @endif
                        </div>

                        <div class="mb-3 col-5 ">
                            <label for="no_telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control border border-dark {{ $errors->has('no_telepon') ? 'is-invalid' : '' }}" name="no_telepon" id="no_telepon" placeholder="Masukkan nomor telepon pengguna" value="{{ old('no_telepon') }}"/>
                            @if ($errors->has('no_telepon'))
                                <div class="invalid-feedback">
                                    <b>{{ $errors->first('no_telepon') }}</b>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="password" class="form-label">Password
                        </label>
                        <input type="password" class="form-control border border-dark {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" placeholder="Masukkan password"/>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                <b>{{ $errors->first('password') }}</b>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3 ">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password
                        </label>
                        <input type="password" class="form-control border border-dark  {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi password"/>
                        @if ($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                <b>{{ $errors->first('password_confirmation') }}</b>
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-select border border-dark" required>
                            <option value="0" {{ old('role') == '0' ? 'selected' : '' }}>Pilih Role</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin Sekolah</option>
                            <option value="superadmin" {{ old('role') == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                        </select>
                        @error('role')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end my-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
