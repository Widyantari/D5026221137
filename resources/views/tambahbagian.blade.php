@extends('master2')

@section('title', 'Data Bagian')

@section('konten')

    <div class="container">
        <h3>Data Bagian Baru</h3>

        <a href="/bagian"> Kembali</a>

        <br />
        <br />

        <form action="/bagian/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-xl-1 col-form-label">Nama</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-xl-1 col-form-label">Jumlah</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-xl-1 col-form-label">Tersedia</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="tersedia" name="tersedia">
                </div>
            </div>
            <input type="Submit" class="btn btn-primary"></button>
        </form>
    </div>
@endsection
