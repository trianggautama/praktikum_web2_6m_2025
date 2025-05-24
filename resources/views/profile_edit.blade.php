@extends('layouts.main')
@section('content')
<div class="container mt-4">
   <div class="card">
        <div class="card-body">
            <h2>Edit Profil</h2>
            <form action="{{route('profile.update',$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mt-3">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$user->nama}}">
                </div>
                 <div class="form-group mt-3">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="">- pilih -</option>
                        <option value="Laki-laki" {{$user->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>
                            Laki-laki
                        </option>
                        <option value="Perempuan" {{$user->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>
                            Perempuan
                        </option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" 
                        value="{{$user->nomor_telepon}}">
                </div>
                <div class="form-group mt-3">
                    <label for="">Alamat</label>
                    <textarea  name="alamat" id="alamat" class="form-control">{{$user->alamat}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{asset('uploads/users/'.$user->foto)}}" alt="" width="100%">
                    </div>
                    <div class="col-md">
                        <div class="form-group mt-3">
                            <label for="">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                            <small class="text-danger">isi apabila ingin merubah file</small>
                        </div>
                    </div>
                </div>
                <div class="float-end">
                    <a href="{{route('profile')}}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary"> Simpan data</button>
                </div>
            </form>
        </div>
   </div>
</div>
@endsection