@extends('master2')
@section('title','Database Pegawai')

@section('judul_halaman')
    <h2>Data Pegawai</h2>

    <a href="/pegawai/tambah" class="btn btn-primary my-3"> + Tambah Pegawai Baru</a>

    <br />
@endsection
	{{-- <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style> --}}

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3> --}}

@section('konten')
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td @if($p->pegawai_umur <= 30)
                class = "bg-dark text-light"
                @elseif($p->pegawai_umur >= 30)
                class = "bg-danger text-light"
                @endif
            >{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
		</tr>
		@endforeach
	</table>

	<br/>



	{{ $pegawai->links() }}

@endsection
