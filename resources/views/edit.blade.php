@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')

    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <br />
    <div class="row">
        <div class="col-6">
            <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
        </div>
        <div class="col-6">

    <form class="float-right" action="/pegawai/cari" method="GET">

        <div class="form-row align-items-center">
            <div class="col-auto">
                <input class="form form-control" type="text" name="cari" placeholder="Cari Nama Pegawai..."
                    value="{{ old('cari', isset($cari) ? $cari : '') }}">
            </div>

            <div class="col-auto">
                <input class="btn btn-info" type="submit" value="Cari">
            </div>
        </div>

    </form>
        </div>
    </div>
    <br />

    <table class="table table-stripped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a class="btn btn-warning" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                    |
                    <a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}
@endsection
