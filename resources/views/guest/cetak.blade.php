<!DOCTYPE html>
<html>
<h3><center>Laporan Daftar Hadir</center></h3>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Nama Instansi</th>
        <th>Jabatan</th>
        <th>No. Hp</th>
        <th>TTD</th>
    </tr>
    @foreach($guest as $g)
        <tr>
            <td>{{$g->nip}}</td>
            <td>{{$g->nama}}</td>
            <td>{{$g->jenis_kelamin}}</td>
            <td>{{$g->nama_instansi}}</td>
            <td>{{$g->jabatan}}</td>
            <td>{{$g->no_hp}}</td>
            <td>{{$g->ttd}}</td>
        </tr>
    @endforeach
</table>
</html>