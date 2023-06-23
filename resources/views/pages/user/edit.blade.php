@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">User Mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data User Mobil</li>
            </ol>
            <a href="/user" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/user/update/{{$userData->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">User</label>
                        <input type="text" value="{{$userData->name}}" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="{{$userData->email}}" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="number" value="{{$userData->contact}}" class="form-control" name="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" value="{{$userData->password}}" class="form-control" name="password" required>
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection