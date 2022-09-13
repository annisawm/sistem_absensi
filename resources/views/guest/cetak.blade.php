{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Laporan Daftar Hadir</title>--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<style type="text/css">--}}
{{--    table tr td,--}}
{{--    table tr th {--}}
{{--        font-size: 9pt;--}}
{{--    }--}}
{{--</style>--}}
{{--<center>--}}
{{--    <h5>Laporan Daftar Hadir</h5>--}}
{{--</center>--}}

{{--<table class='table table-bordered'>--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>NIP</th>--}}
{{--        <th>Nama</th>--}}
{{--        <th>Jenis Kelamin</th>--}}
{{--        <th>Nama Instansi</th>--}}
{{--        <th>Jabatan</th>--}}
{{--        <th>No. Hp</th>--}}
{{--        <th>TTD</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @php $i=1 @endphp--}}
{{--    @foreach($guest as $g)--}}
{{--        <tr>--}}
{{--            <td>{{ $i++ }}</td>--}}
{{--            <td>{{$g->nio}}</td>--}}
{{--            <td>{{$g->nama}}</td>--}}
{{--            <td>{{$g->jenis_kelamin}}</td>--}}
{{--            <td>{{$g->nama_instansi}}</td>--}}
{{--            <td>{{$g->jabatan}}</td>--}}
{{--            <td>{{$g->no_hp}}</td>--}}
{{--            <td>{{$g->ttd}}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}

{{--</body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html>
<head>
    <title>Laporan Daftar Hadir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Daftar Hadir</h1>
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">NIP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Nama Instansi</th>
            <th>Jabatan</th>
            <th>No. Hp</th>
            <th>TTD</th>
        </tr>
        @foreach ($guest as $g)
            <tr>
                <td>{{$g->nio }}</td>
                <td>{{$g->nama}}</td>
                <td>{{$g->jenis_kelamin}}</td>
                <td>{{$g->nama_instansi}}</td>
                <td>{{$g->jabatan}}</td>
                <td>{{$g->no_hp}}</td>
                <td>{{$g->ttd}}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
