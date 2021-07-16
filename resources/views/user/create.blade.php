@extends('admin.admin')

@section('title')@parent:: Registration @endsection



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-5">
                <span><h1>Регистрация</h1></span>
        <form method="post" action="{{ route('register.store') }}">

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Нажать</button>

        </form>
    </div>
    </div>
    </div>
@endsection