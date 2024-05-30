<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DeleteController extends Controller
{
    public function delete($id){
        $cek = DB::table("dadakan")->where("id",$id)->first();
        if(File::exists(public_path('foto/'.$cek->foto_user))){
            File::delete(public_path('foto/'.$cek->foto_user));
        }
        if($cek){
            $cek = DB::table("dadakan")->where("id",$id)->delete();
        }
        return redirect('/');
    }
}