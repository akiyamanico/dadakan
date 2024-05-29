@extends('template.template')

@section('title')
Tambah Mapel
@endsection

@section('content')
<form action="{{route('createdata')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="flex flex-col gap-2">
    <span>{{$errors->first('nama')}}</span>
        <label for="">Nama</label>
        <input type="text" name="nama" value="{{old('nama')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('nama')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Email</label>
        <input type="text" name="email" value="{{old('email')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('email')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Telpon</label>
        <input type="text" name="telpon" value="{{old('telpon')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('telpon')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Alamat</label>
        <input type="text" name="alamat" value="{{old('alamat')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('alamat')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Pendidikan Terakhir</label>
        <input type="text" name="pendidikan_terakhir" value="{{old('pendidikan_terakhir')}}" class="p-2 border rounded-md">
        <span>{{$errors->first('pendidikan_terakhir')}}</span>
    </div>
    <div class="flex flex-col gap-2">
        <label for="">Foto User</label>
        <input type="file" name="foto_user" class="p-2 border rounded-md">
        <span>{{$errors->first('foto_user')}}</span>
    </div>
    <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded text-white">Simpan</button>
    </div>
</form>
@endsection