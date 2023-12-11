<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Karyawan</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <a href="/karyawan/input" class="btn btn-primary"> Tambah Data</a>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Tambah Data</h3>
                            <br/>

                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <br/>
                             <!-- form validasi -->
                            <form action="/karyawan/proses" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="pekerjaan">Kode Karyawan</label>
                                    <input class="form-control" type="text" name="kodepegawai" value="{{ old('kodepegawai') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="namalengkap" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Divisi</label>
                                    <input class="form-control" type="text" name="divisi" value="{{ old('divisi') }}">
                                </div>
                                <div class="form-group">
                                    <label for="usia">Departemen</label>
                                    <input class="form-control" type="text" name="departemen" value="{{ old('departemen') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
