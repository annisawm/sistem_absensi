@extends('layouts.master')
@section('title')
    <title> Tambah Data </title>
@endsection
@section('header')
    <h1>Formulir Daftar Hadir</h1>
@endsection
@section('subheader')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Formulir Daftar Hadir</li>
@endsection
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('guest.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Status Kepegawaian</label>
                                <!-- error message untuk title -->
                                <select name="status" id="status">
                                    <option value="0">Pilih</option>
                                    <option value="1">PNS</option>
                                    <option value="2">Non PNS</option>
                                </select>
                                @error('nip')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NIP</label>
                                <input type="text" id="nip" disabled
                                    class="form-control @error('nip') is-invalid @enderror" name="nip"
                                    value="{{ old('nip') }}" placeholder="Masukkan NIP">

                                <!-- error message untuk title -->
                                @error('nip')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">

                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                            <label class="font-weight-bold">JENIS KELAMIN</label>
                            <input type="text"
                                class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                placeholder="Masukkan L/P">

                            <!-- error message untuk title -->
                            @error('jenis_kelamin')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                            <div class="form-group">
                                <label class="font-weight-bold">JENIS KELAMIN</label>
                                <br>
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA INSTANSI</label>
                                <input type="text" class="form-control @error('nama_instansi') is-invalid @enderror"
                                    name="nama_instansi" value="{{ old('nama_instansi') }}"
                                    placeholder="Masukkan Nama Instansi">

                                <!-- error message untuk title -->
                                @error('instansi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JABATAN</label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                    name="jabatan" value="{{ old('jabatan') }}" placeholder="Masukkan Jabatan">

                                <!-- error message untuk title -->
                                @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NO.HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan No.HP">

                                <!-- error message untuk title -->
                                @error('no_hp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TTD</label>
                                <input type="text" class="form-control @error('ttd') is-invalid @enderror" name="ttd"
                                    value="{{ old('ttd') }}" placeholder="Masukkan TTD">

                                <!-- error message untuk title -->
                                @error('ttd')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $("#status").change(function() {
            var id = $(this).val();
            // if (id==1){
            //     $('#nip').prop("disabled", false);                
            // } else if(id==2){
            //     $('#nip').prop("disabled", true);
            // } else if(id==0){
            //     $('#nip').prop("disabled", true);
            // }         

            // TERNARY CONDITION
            id == 1 ? $('#nip').prop("disabled", false) : $('#nip').prop("disabled", true);
        });
    </script>
@endpush
