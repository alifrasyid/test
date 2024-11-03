<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\HealthSis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class HealthSisController extends Controller
{

    public function index(){
        $prods = dashboard::get();
        return view("Dashboard", compact('prods'));
    }
    public function Login()
    {
        $prods = dashboard::get();
        if (Auth::check()) {
            session_start();
            return view("Dashboard", compact('prods'));
        } else {
            return view("Login");
        };
    }

    public function LoginCheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = HealthSis::where('Email', $email)->first();
        if ($user && password_verify($password, $user->password)) {
            session(['username' => $user->Username]);
            session(['id' => $user->id]);
            session(['statusLogin' => true]);
            session(['statusAdmin' => false]);
            return redirect('Dashboard');
        } elseif ($email == "AlifAdmin" && $password == "alif123") {
            session(['username' => 'ADMIN']);
            session(['id' => '0']);
            session(['statusLogin' => true]);
            session(['statusAdmin' => true]);
            return redirect('Dashboard');
        } else {
            return redirect('Login')->with('error', 'Email atau password salah');
        }
    }


    public function create()
    {
        return view('register', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'HealthSis'
        ]);
    }
    public function store(Request $request)
    {
        $prod = new HealthSis;
        $prod->FirstName = $request->FirstName;
        $prod->LastName = $request->LastName;
        $prod->Username = $request->Username;
        $prod->Email = $request->Email;
        $prod->password = Hash::make($request->password);
        $prod->NoHP = '';
        $prod->Status = '';
        $prod->Note = '';
        $prod->Umur = '';
        $prod->TanggalLahir = '';
        $prod->Image = 'default.jpg';
        $prod->save();
        return redirect('/Login')->with('msg', 'Akun Berhasil dibuat');
    }

    public function edit($id)
    {
        return view('Profile', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "HealthSis/$id/update",
            'prods' => HealthSis::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $prod = HealthSis::find($id);
        $prod->Username = $request->Username;
        $prod->NoHP = $request->NoHP;
        $prod->Status = $request->Status;
        $prod->Note = $request->Note;
        $birthdate = Carbon::createFromFormat('Y-m-d', $request->TanggalLahir);
        $prod->Umur = $birthdate->diffInYears(Carbon::now()) . ' tahun';
        $prod->TanggalLahir = $request->TanggalLahir;
        if ($request->file('Image')) {
            $file = $request->file('Image');
            $filename = date('YmdHi') . $file->getClientOriginalExtension();
            $file->move(public_path('public/Image'), $filename);
            $prod->Image = $filename;
        }
        $prod->save();
        return redirect("/HealthSis/{$id}/edit")->with('msg', 'Edit berhasil');
    }

    public function logout()
    {
        session(['statusAdmin' => false]);
        session(['statusLogin' => false]);
        session()->flush();
        $prods = dashboard::get();
        return view("Dashboard", compact('prods'));
    }

    public function delete($id)
    {
        HealthSis::destroy($id);
        session(['statusAdmin' => false]);
        session(['statusLogin' => false]);
        session()->flush();
        return redirect("/Dashboard")->with('msg', 'Hapus Akun berhasil');
    }
}
