<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Bagian</title>
</head>
<body>

    <h3>Data Bagian</h3>

    <a href="/bagian"> Kembali</a>

    <br />
    <br />

	@foreach($bagian as $s)
	<form action="/bagian/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kode" value="{{ $s->kodebagian}}">
        <div class="form-group">
            <label for="mk">Nma:</label>
            <input type="text" required="required" name="mk" value="{{ $s->namabagian }}" class="form-control" id="mk">
        </div>
        <br>
        <div class="form-group">
            <label for="st">Jumlah:</label>
            <input type="text" required="required" name="st" value="{{ $s->jumlahbagian }}" class="form-control" id="st">
        </div>
        <br>
        <div class="form-group">
            <label for="tsd">Ketersediaan:</label>
            <input type="text" required="required" name="tsd" value="{{ $s->tersedia }}" class="form-control" id="tsd">
        </div>
        <br>
        <input type="submit" value="Simpan Data" >
    </form>
	@endforeach

</body>
</html>
