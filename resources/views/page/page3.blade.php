@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<form action="/page12" method="post" >
    <select name="select">
        <option value="TH">ไทย</option>
        <option value="LA">ลาว</option>
        <option value="MA">มาเล</option>
    </select>

    รายละเอียด 
    <textarea name="txt_textarea"></textarea>

    <br>
    <input type="submit" value="ส่งค่า">
</form>

@endsection