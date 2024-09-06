@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 vh-100 d-flex align-items-center">
                <div class="card w-100 shadow">
                    <div class="card-header">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route("login.process")}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input name="email" value="{{old("email")}}" type="text" class="form-control" />
                                @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input name="password" value="{{old("password")}}" type="password" class="form-control" />
                                @error('password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button class="btn btn-block btn-primary">Login</button>
                            <p class="mt-2">
                                Don't have an account? Register
                                <a href="{{route("register")}}">here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
