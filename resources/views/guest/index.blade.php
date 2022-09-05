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
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('guest.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        <table class="table table-bordered" id="tabel_guest">
                            <thead>
                            <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">JENIS KELAMIN(L/P)</th>
                                <th scope="col">NAMA INSTANSI</th>
                                <th scope="col">JABATAN</th>
                                <th scope="col">NO.HP</th>
                                <th scope="col">TTD</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            var dt = $('#tabel_guest').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('guest.index') }}',
                columns: [{
                    data: 'nip',
                    name: 'nip'
                },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'jenis_kelamin',
                        name: 'jenis_kelamin'
                    },
                    {
                        data: 'nama_instansi',
                        name: 'nama_instansi'
                    },
                    {
                        data: 'jabatan',
                        name: 'jabatan'
                    },
                    {
                        data: 'no_hp',
                        name: 'no_hp'
                    },
                    {
                        data: 'ttd',
                        name: 'ttd'
                    },
                ],
            });
        });
    </script>
@endpush
