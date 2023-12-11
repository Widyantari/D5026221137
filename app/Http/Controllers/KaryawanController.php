<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
		return view('index',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->umur,
			'departemen' => $request->alamat
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
    }

    // method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['karyawan' => $karyawan]);

	}

    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'kodepegawai' => 'required|numeric|max:5',
           'namalengkap' => 'required|alpha|max:50',
           'divisi' => 'required|alpha|max:20',
           'departemen' => 'required|alpha|max:20'
        ]);

        return view('proses',['data' => $request]);
    }
}
