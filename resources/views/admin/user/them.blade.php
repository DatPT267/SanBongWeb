@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/user/them" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên người dùng"  />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email"  />
                            </div>
                             <div class="form-group">
                                <label>Giới Tính </label>
                                <label class="radio-inline">
                                    <input name="gender" value="1" type="radio" checked="">Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="0"  type="radio"
                                   
                                    >Nữ
                                </label>
                            </div>
                             <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại"  />
                            </div>
                             <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="tel" class="form-control" name="address" placeholder="Nhập địa chỉ "  />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại password</label>
                                <input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Quyền người dùng : </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" type="radio" checked="" 
                                    >Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1"  type="radio"
                                    >Admin
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Màu đại diện</label>
                                <input type="color" class="form-control" name="color" placeholder="Enter the color" style="width: 50%">
                            </div>
                           
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection