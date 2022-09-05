@extends('layouts.master')
@section('title')    
    <title>Formulir Daftar Kegiatan</title>
@endsection
@section('subheader')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Formulir Daftar Kegiatan</li>
@endsection
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"> 
                <h2> Detail Kegiatan</h2>
                <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('program.index') }}"> Back</a>
            </div>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Acara: </strong>
                {!! $program->acara !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kegiatan: </strong>
                {!! $program->tanggal !!}
             </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Kegiatan: </strong>
                {!! $program->waktu !!}
             </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat:     </strong>
                {!! $program->tempat !!}
            </div>
            <br>
        </div>
        <a class="btn btn-primary" href="../../guest"> Create Link</a>
        &nbsp &nbsp &nbsp
        <a class="btn btn-primary" href="#"> QR Code</a>
    </div>
 </div>
 
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Hadir Kegiatan</h3>
        </div>
        <div class="card-body">
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
        $(document).ready(function() {
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
