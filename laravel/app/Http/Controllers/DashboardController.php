<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function create()
    {
        return view('Add-Carouse', [
            'title' => 'Create',
            'method' => 'POST',
            'action' => '/storeDashboard'
        ]);
    }
    public function store(Request $request)
    {

        $prod = new dashboard;
        $prod->Judul = $request->Judul;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->Deskripsi = $request->Deskripsi;
        $prod->save();
        return redirect('/Dashboard')->with('msg', 'Tambah berhasil');
    }

    public function destroy($id)
    {
        // Gunakan model yang bersesuaian untuk menghapus data
        $data = dashboard::findOrFail($id);
        $data->delete();
    
        // Redirect ke halaman sebelumnya atau halaman yang diinginkan setelah data dihapus
        return redirect('/Dashboard');

    }
    public function edit($id)
    {
        return view('Add-Carouse', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "/dashboard/$id/update",
            'data' => dashboard::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $prod = dashboard::find($id);
        $prod->Judul = $request->Judul;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->Deskripsi = $request->Deskripsi;
        $prod->save();
        return redirect('/Dashboard')->with('msg', 'Tambah berhasil');

    }
    

}