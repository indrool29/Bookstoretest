<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = DB::table('buku')->get();
        return view('admin.managemenbuku', ['data_buku' => $data_buku]);
    }
    public function tambah()
    {
        return view('admin.buku_tambah');
    }
    public function simpan(Request $request)
    {
        DB::table('buku')->insert([
            'no_buku' => $request->nomor,
            'judul_buku' => $request->judul,
            'nama_penulis' => $request->penulis,
            'tgl_terbit' => $request->tanggal
        ]);
        return redirect('/admin/managemenbuku');
    }
    public function edit($id)
    {
        $data_buku = DB::table('buku')->where('no_buku', $id)->get();
        return view('admin.managemenbuku_edit', ['data_buku' => $data_buku]);
    }
    public function update(Request $request)
    {
        DB::table('buku')->where('no_buku', $request->nomor)->update([
            'judul_buku' => $request->judul,
            'nama_penulis' => $request->penulis,
            'tgl_terbit' => $request->tanggal
        ]);
        return redirect('/admin/managemenbuku');
    }
    public function hapus($id)
    {
        DB::table('buku')->where('no_buku', $id)->delete();
        return redirect('/admin/managemenbuku');
    }
    public function Admin()
    {
        return view('admin.admin');
    }
    public function User()
    {
        return view('admin.managemenpenulis');
    }
}
