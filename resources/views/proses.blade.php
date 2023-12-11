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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Kode Karyawan</td>
                                <td>{{ $data->kodepegawai }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nama Lengkap</td>
                                <td>{{ $data->namalengkap }}</td>
                            </tr>
                            <tr>
                                <td>Divisi</td>
                                <td>{{ $data->divisi }}</td>
                            </tr>
                            <tr>
                                <td>Departemen</td>
                                <td>{{ $data->departemen }}</td>
                            </tr>
                        </table>

                        <a href="/karyawan/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>



