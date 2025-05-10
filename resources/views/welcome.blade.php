@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <div class="text-center">
        <h3>Login page</h3>
    </div>
    <form action="{{route('login.post')}}" method="POST">
        @csrf
        <div class="form-group mt-3">
            <label for="">Username</label>
            <input type="text" name="username" id="username" 
                placeholder="Username" class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="">Password</label>
            <input type="password" name="password" id="password" 
                placeholder="Password" class="form-control">
        </div>
        <a href="{{route('register')}}">belum punya akun ? register sekarang</a> <br>
        <button type="submit" class="mt-4 btn btn-primary">
            Login
        </button>
    </form>
</div>
@endsection