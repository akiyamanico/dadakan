@extends('template.template')

@section('title')
Tambah Mapel
@endsection

@section('content')
<form action="{{route('editdata',$data->id)}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="flex flex-col gap-2">
    <span>{{$errors->first('nama')}}</span>
        <label for="">Nama</label>
        <input type="text" name="nama" value="{{$data->nama}}" class="p-2 border rounded-md">
        <span>{{$errors->first('nama')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Email</label>
        <input type="text" name="email" value="{{$data->email}}" class="p-2 border rounded-md">
        <span>{{$errors->first('email')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Telpon</label>
        <input type="text" name="telpon" value="{{$data->telpon}}" class="p-2 border rounded-md">
        <span>{{$errors->first('telpon')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Alamat</label>
        <input type="text" name="alamat" value="{{$data->alamat}}" class="p-2 border rounded-md">
        <span>{{$errors->first('alamat')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Pendidikan Terakhir</label>
        <input type="text" name="pendidikan_terakhir" value="{{$data->pendidikan_terakhir}}" class="p-2 border rounded-md">
        <span>{{$errors->first('pendidikan_terakhir')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Foto User</label>
        <img src="{{asset('foto/'. $data->foto_user)}}" class="img-responsive w-32 rounded rounded-md flex justify-center"/>
        <input type="file" name="foto_user" class="p-2 border rounded-md">
        <span>{{$errors->first('foto_user')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded text-white">Simpan</button>
    </div>
</form>
@endsection