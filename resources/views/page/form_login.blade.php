@extends('layouts.main')
@section('title','เข้าสู่ระบบ')
@section('content')

<div class="col-sm-4">
    <form action="/form_login" method="post">
                        <div class="form-group">
                                <label>username</label>
                                <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>password</label>
                                <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">login</button>
    </form>
</div>

<hr>
สถานะการ Login = {{ $status }}


@endsection