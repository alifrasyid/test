<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\HealthSis;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $prods = artikel::all();
        return view('Artikel', compact('prods'));
    }

    public function create($id)
    {
        return view('Create-Artikel', [
            'title' => 'Buat',
            'method' => 'POST',
            'action' => "/artikel/$id/store",
            'prods' => HealthSis::find($id)
        ]);
    }
    public function store(Request $request, $id)
    {
        $user = HealthSis::find($id);
        $prod = new artikel;
        $prod->Created_by = $user->Username;
        $prod->Deskripsi = $request->Deskripsi;
        $prod->Judul = $request->Judul;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->save();
        return redirect('/artikel')->with('msg', 'Edit berhasil');
    }

    public function edit($id, $iduser)
    {
        return view('Create-Artikel', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "/artikel/$id/$iduser/update",
            'prods' => artikel::find($id)
        ]);
    }
    public function show($id)
    {
        return view('Artikel.Artikel_1', [
            'prods' => artikel::find($id)
        ]);
    }
    public function update(Request $request, $id, $iduser)
    {
        $user = HealthSis::find($iduser);
        $prod = artikel::find($id);
        $prod->Created_by = $user->Username;
        $prod->Deskripsi = $request->Deskripsi;
        $prod->Judul = $request->Judul;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->save();
        return redirect('/artikel')->with('msg', 'Edit berhasil');
    }

    public function delete($id){
        artikel::destroy($id);
        return redirect('/artikel')->with('msg', 'Hapus berhasil');
    }
}
