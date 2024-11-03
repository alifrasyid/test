<?php

namespace App\Http\Controllers;

use App\Models\HealthSis;
use App\Models\menudiet;
use Illuminate\Http\Request;

class menudietController extends Controller
{
    //untuk memanggil di MENU DIET
    public function index()
    {
        $prods = menudiet::get();
        return view('MenuDiet', compact('prods'));

    }

    public function create()
    {
        return view('Create_MenuDiet', [
            'title' => 'Create',
            'method' => 'POST',
            'action' => 'storemenudiet'
        ]);
    }
    public function store(Request $request)
    {

        $prod = new menudiet;
        $prod->Judul = $request->Judul;
        $prod->SubJudul = $request->SubJudul;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->Chef = 'Admin';
        $prod->Deskripsi = $request->Deskripsi;
        $prod->save();
        return redirect('/menudiet')->with('msg', 'Tambah berhasil');
    }
    // untuk memanggil detail MENU DIET
    public function show($id)
    {
        return view('menudiet.food', [
            'prods' => menudiet::find($id)
        ]);
    }
    public function destroy($id)
    {
        // Gunakan model yang bersesuaian untuk menghapus data
        $data = menudiet::findOrFail($id);
        $data->delete();
    
        // Redirect ke halaman sebelumnya atau halaman yang diinginkan setelah data dihapus
        return redirect('/menudiet');

    }
    public function edit($id)
    {
        return view('Create_MenuDiet', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "/menudiet/$id/update",
            'data' => menudiet::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $prod = menudiet::find($id);
        $prod->Judul = $request->Judul;
        $prod->SubJudul = $request->SubJudul;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->Chef = 'Admin';
        $prod->Deskripsi = $request->Deskripsi;
        $prod->save();
        return redirect('/menudiet')->with('msg', 'Tambah berhasil');

    }

}