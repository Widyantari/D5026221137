@extends('master2')

@section('title', 'Data Bagian')

@section('konten')


    <br />
    <br />

    @foreach ($bagian as $s)
        <div class="row">
            <div class="col-md-5 border">

            </div>
            <div class="col-md-7">
                @foreach ($bagian as $s)
                    <div class="row mb-3">
                        <div class="col-sm-2">Kode</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $s->kodebagian }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Nama</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $s->namabagian }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2">Jumlah</div>
                        <div class="col-sm-1">:</div>
                        <div class="col-sm-5">{{ $s->jumlahbagian}}</div>
                    </div>
                    <a href="/bagian" button type="button" class="btn btn-primary" > 0K </a>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection
