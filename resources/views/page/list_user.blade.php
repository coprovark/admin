@extends('layouts.main')

@section('title', 'สมาชิก')

@section('content')

<form>
<div class="form-group col-sm-1">
      <button class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"></span>  
        เพิ่ม</button>
  </div>
  <div class="form-group col-sm-4">
    <input type="text" class="form-control"  placeholder="ค้นหา">
  </div>
  <div class="form-group col-sm-1">
      <button class="btn btn-primary">
        <span class="glyphicon glyphicon-search"></span>  
        ค้นหา</button>
  </div>
</form>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>STATUS</td>
            <td></td>
        </tr>
        @foreach($data_list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <button class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button>
                <button class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-pencil"></span>  
                    แก้ไข
                </button>
            </td>
        </tr>
        @endforeach
    </table>








@endsection