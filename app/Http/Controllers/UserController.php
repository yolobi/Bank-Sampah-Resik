<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function buku_tabungan(){
        $user = Auth::user();
        $records = DB::table('records')->where('name', $user->name)->paginate(10);
        return view('user.buku-tabungan', compact('records'));
        // return view('user.buku-tabungan');
    }

    public function peringkat(){
        $data = DB::table('users')->orderBy('saldo', 'desc')->paginate(10);
        return view('user.peringkat', compact('data'));
    }

    public function edit_profil(){
        $user = Auth::user();
        return view('user.edit-profil', compact('user'));
    }

    public function postEditProfil(Request $request){
        $user = Auth::user();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        DB::table('users')->where('name', $user->name)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->hp,
        ]);
        // dd($request, $user);

        return redirect()->back()->with('Profil berhasil diupdate');
    }

    public function daftarHarga(){
        $sampah = DB::table('jenis_sampah')->paginate(10);
        return view('user.daftar-harga', compact('sampah'));
    }

    public function penarikan(){
        $penarikan = DB::table('request_penarikan')->where('user_id', Auth::user()->id)->paginate(10);
        return view('user.penarikan', compact('penarikan'));
    }

    public function requestPenarikan(){
        return view('user.request-penarikan');
    }

    public function postRequestPenarikan(Request $request){
        $request->validate([
            'jumlah' => 'required'
        ]);
        $user = Auth::user();
        if($request->jumlah > $user->saldo){
            return back()->with('message', 'Saldo Anda tidak mencukupi!');
        }
        
        ModelsRequest::create([
            'name' => $user->name,
            'tanggal' => date("Y/m/d"),
            'jumlah' => $request->jumlah,
            'status' => 'sedang diproses',
            'user_id' => $user->id,
        ]);

        return redirect('/user/penarikan');
    }
}
