@extends('admin.admin')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-5">
<span><h1>Логин</h1></span>
        <form method="post" action="{{ route('login') }}">

            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Нажать</button>

        </form>
        </div>
        </div>
    </div>
@endsection

