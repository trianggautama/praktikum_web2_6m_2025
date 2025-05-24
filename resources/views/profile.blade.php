@extends('layouts.main')
@section('content')
<div class="container mt-4">
   <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md">
                <h2>Halaman Profil</h2>
            </div>
            <div class="col-md">
                <div class="float-end">
                    <a href="{{route('profile.edit',Auth::user()->id)}}" class="btn btn-primary">Edit Profil</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <img src="{{asset('uploads/users/'.Auth::user()->foto)}}" alt="" width="100%">
            </div>
            <div class="col-md">
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Nama</td>
                        <td width="2%">:</td>
                        <td>{{Auth::user()->nama}}</td>
                    </tr>
                     <tr>
                        <td width="20%">Jenis kelamin</td>
                        <td width="2%">:</td>
                        <td>{{Auth::user()->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Nomor Telepon</td>
                        <td width="2%">:</td>
                        <td>{{Auth::user()->nomor_telepon}}</td>
                    </tr>
                     <tr>
                        <td width="20%">Alamat</td>
                        <td width="2%">:</td>
                        <td>{{Auth::user()->alamat}}</td>
                    </tr>
                      <tr>
                        <td width="20%">Username</td>
                        <td width="2%">:</td>
                        <td>{{Auth::user()->username}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
   </div>
</div>
@endsection