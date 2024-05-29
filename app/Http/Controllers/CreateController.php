<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Dadakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateController extends Controller
{
    public function index(){
        return view('TambahData');
    }
    public function create(CreateRequest $r){
        if($r->validated()){
            $foto = $r->foto_user->hashName();
            // Log::info('Upload File', $foto);
            $r->foto_user->move('foto/', $foto);
            DB::table('dadakan')->insert([
            'nama' => $r->nama,
            'email' => $r->email,
            'telpon' => $r->telpon,
            'alamat' => $r->alamat,
            'pendidikan_terakhir' => $r->pendidikan_terakhir,
            'foto_user' => $foto
            ]);
        }
        return redirect('/');
    }
}
