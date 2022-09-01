@extends('layouts.master')
@section('title')
    <title> Tambah Data </title>
@endsection
@push('js')
<!-- Bootstrap DateTimePicker -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@endpush
@section('header')
    <h1>Formulir Daftar Kegiatan</h1>
@endsection
@section('subheader')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Formulir Daftar Kegiatan</li>
@endsection
@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('program.store') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">ACARA</label>
                            <input type="text"
                                class="form-control @error('acara') is-invalid @enderror"
                                name="acara" value="{{ old('acara') }}"
                                placeholder="Masukkan Nama Acara">
                            <div>
                            <!-- error message untuk title -->
                            @error('acara')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="font-weight-bold">TANGGAL KEGIATAN</label>
                            <input id="tanggal" type="text"
                                class="form-control @error('tanggal') is-invalid @enderror"
                                name="tanggal" value="{{ old('tanggal') }}"
                                placeholder="Masukkan Tanggal Kegiatan">

                            <!-- error message untuk title -->
                            @error('tanggal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">WAKTU KEGIATAN</label>
                            <input id="waktu" type="text"
                                class="form-control @error('waktu') is-invalid @enderror"
                                name="waktu" value="{{ old('waktu') }}"
                                placeholder="Masukkan Waktu Kegiatan">

                            <!-- error message untuk title -->
                            @error('waktu')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Tempat</label>
                            <input type="text"
                                class="form-control @error('tempat') is-invalid @enderror"
                                name="tempat" value="{{ old('tempat') }}"
                                placeholder="Masukkan Tempat Kegiatan">

                            <!-- error message untuk title -->
                            @error('tempat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            
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
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/id.js"></script>
<script type="text/javascript">
$(function () {
//   $('#tanggal').datetimepicker({
//    format: 'DD MMMM YYYY HH:mm',
//   });

$('#tanggal').datetimepicker({
    format: 'dddd, D MMMM YYYY',
    locale: 'id',
});


$('#waktu').datetimepicker({
    format: 'HH:mm'
});
});
</script>
@endpush