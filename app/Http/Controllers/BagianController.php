<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller
{
	public function index()
	{
    	// mengambil data dari table bagian
		// $bagian = DB::table('bagian')->get();
        $bagian = DB::table('bagian')->paginate();

    	// mengirim data bagian ke view index
		return view('indexBagian',['bagian' => $bagian]);

	}

	// method untuk menampilkan view form tambah bagian
	public function tambah()
	{

		// memanggil view tambah
		return view('bagian');

	}

	// method untuk insert data ke table bagian
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('bagian')->insert([
			// 'kodebagian' => $request->kode,
			'namabagian' => $request->nama,
			'jumlahbagian' => $request->jumlah,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman bagian
		return redirect('/bagian');

	}

	// method untuk edit data bagian
	public function edit($id)
	{
		// mengambil data bagian berdasarkan kode yang dipilih
		$bagian = DB::table('bagian')->where('kodebagian',$id)->get();
		// passing data sepeda yang didapat ke view editbagian.blade.php
		return view('editbagian',['sepeda' => $bagian]);

	}

	// method untuk hapus data bagian
	public function hapus($id)
	{
		// menghapus data bagian berdasarkan kode yang dipilih
		DB::table('bagian')->where('kodebagian',$id)->delete();

		// alihkan halaman ke halaman bagian
		return redirect('/bagian');
	}

    // method untuk mencari data bagian
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bagian sesuai pencarian data
		$bagian = DB::table('bagian')
		->where('namabagian','like',"%".$cari."%")
		->paginate();

    		// mengirim data sepeda ke view index
		return view('indexbagian',['bagian' => $bagian, 'cari' => $cari]);

	}

    	// method untuk view data bagian
        public function view($id)
        {
            // mengambil data bagian berdasarkan kode yang dipilih
        $bagian = DB::table('bagian')->where('kodebagian', $id)->get();
            // passing data sepeda yang didapat ke view viewbagian.blade.php
        return view('viewbagian', ['bagian' => $bagian]);
        }

}
