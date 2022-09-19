<!DOCTYPE html>
<html>
<h3><center>Laporan Daftar Hadir</center></h3>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Acara</th>
        <th>Tanggal Kegiatan</th>
        <th>Waktu Kegiatan</th>
        <th>Tempat</th>
    </tr>
    @foreach($program as $g)
        <tr>
            <td>{{$g->acara}}</td>
            <td>{{$g->tanggal}}</td>
            <td>{{$g->waktu}}</td>
            <td>{{$g->tempat}}</td>
        </tr>
    @endforeach
</table>
</html>
