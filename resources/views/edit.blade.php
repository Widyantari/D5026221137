<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>

	<h1>Edit Data Karyawan</h1>


	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/karyawan/input" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodepegawai }}"> <br/>
        Kode Pegawai <textarea required="required" name="alamat">{{ $p->kodepegawai }}</textarea> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->namalengkap }}"> <br/>
		Divisi <input type="text" required="required" name="divisi" value="{{ $p->divisi }}"> <br/>
		Departemen <input type="number" required="required" name="departemen" value="{{ $p->departemen }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    <a href="/karyawan"> Kembali</a>

</body>
</html>
