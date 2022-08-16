<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\RecordAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getUsers(){
        $users = DB::table('users')->paginate(10);
        return view('admin.users', compact('users'));
    }

    public function getRecords(){
        $records = DB::table('records_admin')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.records', compact('records'));
    }

    public function addRecord(){
        return view('admin.tambah-record');
    }

    public function postAddRecord(Request $request){
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'jenis' => 'required',
            'berat' => 'required',
            'debet' => 'required',
        ]);
        $user = DB::table('users')->where('name', $request->name)->first();
        if(!$user){
            return redirect()->back();
        }
        $saldo = $user->saldo + $request->debet;
        Record::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
            'berat' => $request->berat,
            'debet' => $request->debet,
            'kredit' => 0,
            'saldo' => $saldo,
        ]);
        DB::table('users')->where('name', $request->name)->update([
            'saldo' => $saldo
        ]);
        // $record_admin = DB::table('records_admin')->where('name', $request->name)->first();
        
        $record_admin = DB::table('records_admin')->where('name', $request->name);
        
        if(!$record_admin->first()){
            RecordAdmin::create([
                'name' => $user->name,
                'tanggal' => $request->tanggal,
                'berat' => $request->berat,
                'debet' => $request->debet,
                'kredit' => 0,
                'saldo' => $saldo,
            ]);
        }
        else{
            // dd($record_admin->first);
            $berat = $record_admin->first()->berat + $request->berat;
            $old_debet = $record_admin->first()->debet;
            $new_debet = $old_debet + $request->debet;
            $record_admin->update([
                'berat' => $berat,
                'debet' => $new_debet,
                'saldo' => $saldo,
            ]);
        }

        return redirect('admin/records');
    }

    public function requestPenarikan(){
        $penarikan = DB::table('request_penarikan')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.request-penarikan', compact('penarikan'));
    }

    public function penarikanSetuju($id){
        $user_id = DB::table('request_penarikan')->where('id', $id)->first();

        $user = DB::table('users')->where('id', $user_id->user_id)->first();
        $saldo = $user->saldo - $user_id->jumlah;

        $user = DB::table('users')->where('id', $user_id->user_id);
        $user->update([
            'saldo' => $saldo,
        ]);

        DB::table('request_penarikan')->where('id', $id)->update([
            'status' => 'disetujui',
        ]);

        Record::create([
            'name' => $user->first()->name,
            'tanggal' => date("Y/m/d"),
            'jenis' => '-',
            'berat' => 0,
            'debet' => 0,
            'kredit' => $user_id->jumlah,
            'saldo' => $saldo,
        ]);
        // $record_admin = DB::table('records_admin')->where('name', $user->name)->first();
        
        $record_admin = DB::table('records_admin')->where('name', $user->first()->name);
        
        if(!$record_admin->first()){
            RecordAdmin::create([
                'name' => $user->first()->name,
                'tanggal' => date("Y/m/d"),
                'berat' => 0,
                'debet' => 0,
                'kredit' => $user_id->jumlah,
                'saldo' => $saldo,
            ]);
        }
        else{
            $old_kredit = $record_admin->first()->kredit;
            $new_kredit = $old_kredit + $user_id->jumlah;
            $record_admin->update([
                'kredit' => $new_kredit, 
                'saldo' => $saldo,
            ]);
        }

        return redirect()->back();
    }

    public function penarikanTolak($id){
        DB::table('request_penarikan')->where('id', $id)->update([
            'status' => 'ditolak',
        ]);

        return redirect()->back();
    }
}
