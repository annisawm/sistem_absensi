@extends('layouts.master')
@section('title')    
    <title>Formulir Daftar Kegiatan</title>
@endsection
@section('header')
    <h1>Detail Kegiatan</h1>
@endsection
@section('subheader')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Formulir Daftar Kegiatan</li>
@endsection
@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"> 
                <h2> Detail Kegiatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('program.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Acara:</strong>
                {!! $program->acara !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kegiatan:</strong>
                {!! $program->tanggal !!}
             </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Kegiatan:</strong>
                {!! $program->waktu !!}
             </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat:</strong>
                {!! $program->tempat !!}
            </div>
        </div>
        <a class="btn btn-primary" href="../../guest"> Create Link</a>
        &nbsp &nbsp &nbsp
        <a class="btn btn-primary" href="#"> QR Code</a>
    </div>
 </div>
@endsection