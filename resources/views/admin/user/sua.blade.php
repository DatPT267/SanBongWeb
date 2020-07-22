@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>{{$user->name}}</small>
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
                        <form action="admin/user/sua/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên người dùng" value="{{$user->chitiet->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" value="{{$user->email}}" readonly="" />
                            </div>
                             <div class="form-group">
                                <label>Giới Tính </label>
                                <label class="radio-inline">
                                    <input name="gender" value="1" type="radio" 
                                    @if($user->chitiet->gender == 1)
                                    {{"checked"}}
                                    @endif
                                    >Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="0"  type="radio"
                                    @if($user->chitiet->gender == 0)
                                    {{"checked"}}
                                    @endif
                                    >Nữ
                                </label>
                            </div>
                             <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{$user->chitiet->phone}}" />
                            </div>
                             <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="tel" class="form-control" name="address" placeholder="Nhập địa chỉ" value="{{$user->chitiet->address}}" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" onchange="check(this)" name="changePassword">
                                <label>Đổi mật khẩu</label>
                                <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Quyền người dùng : </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" type="radio" 
                                    @if($user->quyen == 0)
                                    {{"checked"}}
                                    @endif
                                    >Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="1"  type="radio"
                                    @if($user->quyen == 1)
                                    {{"checked"}}
                                    @endif
                                    >Admin
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="color" class="form-control" name="color" placeholder="Enter Color" value="{{$user->chitiet->color}}"> 
                            </div>
                           
                            <button type="submit" class="btn btn-default">Sửa</button>
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

@section('script')
    <script type="text/javascript">
        function check(box) {
            if ($(box).is(":checked")) 
                {
                    $(".password").removeAttr('disabled');

                }
                else
                {
                    $(".password").attr('disabled' ,'');
                }
        }
    </script>
@endsection