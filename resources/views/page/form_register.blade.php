@extends('layouts.main')
@section('title','สมัครสมาชิก')
@section('content')


<form>
 
                        <div class="form-group">
                          <label>คำนำหน้า</label>
                          <select class="form-control">
                              <option>นาย</option>
                              <option>นาง</option>
                              <option>นางสาว</option>
                          </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>สกุล</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label>เพศ</label>
                                <label><input type="radio" name="g"> ชาย</label>
                                <label><input type="radio" name="g"> หญิง</label>
                        </div>
                        <div class="form-group">
                                <label>เบอร์โทร</label>
                                <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                                <label>ที่อยู่</label>
                                <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                                <label>อีเมล</label>
                                <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                                <label>สิ่งที่ชอบ</label>
                                <label><input type="checkbox" > ดูหนัง</label>
                                <label><input type="checkbox" > ฟังเพลง</label>
                                <label><input type="checkbox" > เล่นกีฬา</label>
                        </div>
                        <div class="form-group">
                                <label>จังหวัด</label>
                                <select class="form-control">
                                        <option>อุบล 1</option>
                                        <option>อุบล 2</option>
                                        <option>อุบล 3</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label>username</label>
                                <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>password</label>
                                <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>repassword</label>
                                <input type="password" class="form-control">
                        </div>


                        <button type="submit" class="btn btn-primary">ส่งค่า</button>
                        
                        <button type="reset" class="btn btn-warning">ล้างค่าข้อมูล</button>
</form>


@endsection