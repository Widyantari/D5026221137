<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Kontak</p>

	<table class="table">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>arunaganarsih@gmail.com</td>
		</tr>
		<tr>
			<td>Nomer Hokben</td>
			<td>:</td>
			<td>1-500-505</td>
		</tr>
        @for ($i = 1 ; $i<5 ; $i++)
        <tr>
			<td>Nomer </td>
			<td>:</td>
			<td>{{ $i }}</td>
		</tr>

        @endfor
	</table>

@endsection
