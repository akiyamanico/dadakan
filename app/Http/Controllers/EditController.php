<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\EditRequest;
use App\Models\Dadakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EditController extends Controller
{
    public function index($id){
        $data = DB::table('dadakan')->find($id);
        return view('EditData', compact('data'));
    }

    public function edit(EditRequest $r){
        if($r->validated()){
            if($r->foto_user){
                $cek = DB::table('dadakan')->where('id', $r->id);
                if(File::exists(public_path('foto/'.$r->foto_user))){
                    File::delete(public_path('foto/'.$r->foto_user));
                }
                $foto = $r->foto_user->hashName();
                $r->foto_user->move('foto', $foto);
                $data['foto_user'] = $foto;
            }
            $data['nama'] = $r->nama;
            $data['email'] = $r->email;
            $data['telpon'] = $r->telpon;
            $data['alamat'] = $r->alamat;
            $data['pendidikan_terakhir'] = $r->pendidikan_terakhir;

            DB::table('dadakan')->where('id', $r->id)->update($data);
            return redirect('/');
        }
    }
}
