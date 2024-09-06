@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 vh-100 d-flex align-items-center">
                <div class="card w-100 shadow">
                    <div class="card-header">
                        <h4 class="card-title">Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route("register.process")}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control @error("name") is-invalid @enderror" value="{{old("name")}}" />
                                @error('name')
                                    <small class=" text-danger"> {{$message}}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input value="{{old("email")}}" type="text" name="email" class="form-control @error("email") is-invalid @enderror" />
                                @error('email')
                                <small class=" text-danger"> {{$message}}</small>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input value="{{old("password")}}" type="passowrd" name="password" class="form-control @error("password") is-invalid @enderror" />
                                @error('password')
                                <small class=" text-danger"> {{$message}}</small>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input value="{{old("password_confirmation")}}" type="password" name="password_confirmation" class="form-control @error("password_confirmation") is-invalid @enderror" />
                                @error('password_confirmation')
                                <small class=" text-danger"> {{$message}}</small>
                            @enderror
                            </div>
                            <button class="btn btn-block btn-primary">Register</button>
                            <p class="mt-2">
                                Already have an account? Login <a href="{{route("login")}}">here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
