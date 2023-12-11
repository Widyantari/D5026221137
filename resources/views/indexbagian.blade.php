@extends('master2')

@section('title', 'Data Bagian')

@section('konten')

    <h1>PWEB-D</h1>
    <h3>Data Bagian</h3>

    <a href="/bagian/tambah" class="btn btn-primary"> Tambah Bagian</a>

    <br>
    <p>Cari Data Bagian :</p>
    <form action="/bagian/cari" method="GET" class="form-inline">
        <input type="cari" name="cari" class="form-control" placeholder="Cari Bagian .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input type="submit" value="CARI" class="btn btn-info">
    </form>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bagian as $s)
            <tr>
                <td>{{ $s->kodebagian }}</td>
                <td>{{ $s->namabagian }}</td>
                <td>{{ $s->jumlahbagian }}</td>

                {{-- if statement --}}
                <td>
                    @if ($s->jumlahbagian <= 0)
                    <input class="form-check-input" type="checkbox" {{ $s->jumlahbagian <= 0 ? 'disabled' : '' }} id="flexCheckDefault">
                    @elseif ($s->jumlahbagian >= 0)
                    <input class="form-check-input" type="checkbox" value="" {{ $s->jumlahbagian >= 0 ? 'disabled checked' : '' }} id="flexCheckDefault">
                    @endif
                </td>

                <td>
                    <a href="/bagian/view/{{ $s->kodebagian }}" class="btn btn-success">View</a>
                    |
                    <a href="/bagian/edit/{{ $s->kodebagian }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/bagian/hapus/{{ $s->kodebagian }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
