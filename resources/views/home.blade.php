@extends('layouts.main')
@section('content')
<div class="container mt-4">
   <div class="card">
        <div class="card-body bg-primary text-light">
            <h2>Selamat Datang user {{Auth::user()->nama}}</h2>
            <p>di praktikum web2 uniska MAB 2025</p>
        </div>
   </div>
   <div class="card mt-4">
        <div class="card-header">
            <h5>buat postingan baru</h5>
        </div>
        <div class="card-body">
            <input type="text" class="form-control" placeholder="judul postingan">
            <textarea name="isi" id="" class="form-control mt-3" rows="4" placeholder="isi postingan"> </textarea>
             <div class="float-end mt-3">
                <button type="submit" class="btn btn-primary"> Simpan postingan</button>
            </div>
        </div>
   </div>
</div>
@endsection