@extends('master2')

@section('title', 'Data Karyawan')

@section('konten')

    <h1>PWEB-D</h1>
    <h3>Data Karyawan</h3>

    <br>

    <p>Cari Data Karyawan :</p>
    <form action="/karyawan/cari" method="GET" class="form-inline">
        <input type="cari" name="cari" class="form-control" placeholder="Cari Karyawan..."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>

        </tr>
        @foreach ($karyawan as $s)
            <tr>
                <td>{{ $s->kodepegawai }}</td>
                <td>{{ $s->namalengkap }}</td>
                <td>{{ $s->divisi}}</td>
                <td>{{ $s->departemen }}</td>


                <td>
                    <a href="/bagian/hapus/{{ $s->kodebagian }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
        <a href="/karyawan/tambah" class="btn btn-primary"> Tambah Bagian</a>
    </table>
@endsection
