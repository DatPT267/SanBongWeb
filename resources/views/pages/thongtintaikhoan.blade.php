@extends('layout.index')
@section('content')
<div class="set slyderDisplay">
    
</div>
<div class="main cre">
    <div class="container">
        <div class="row row-s">
                <div class="col-xs-12 col-sm-2 col-s">
        <div class="list-menu over">
            <h3>Quản lý</h3>
            <ul class="ul feature-news">
                <li><a href="/profile-customer" title="Thông tin tài khoản" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Thông tin tài khoản</a></li>
                <li><a href="/hop-thu-den" title="Tin nhắn" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Tin nhắn</a></li>
            </ul>
        </div>
    </div>

            <div class="col-xs-12 col-sm-10 col-s">
                <div class="main-content show-itemx">
                    <h1>Thông tin tài khoản</h1>
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                    <div class="infomation">
                        <form action="changeAccount" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-2">
                                    <label class="control-label pull-left">Họ và tên</label>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                <input class="form-control" name="name" id="name" value="{{Auth::user()->chitiet->name}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-2">
                                    <label class="control-label pull-left">Email</label>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                <label>{{Auth::user()->email}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-2">
                                    <label class="control-label pull-left">Địa chỉ</label>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                <input class="form-control" name="address" id="address"  value="{{Auth::user()->chitiet->address}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-2">
                                    <label class="control-label pull-left">Số điện thoại</label>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <input class="form-control" name="phone" id="phone" value="{{Auth::user()->chitiet->phone}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div  class="col-xs-12 col-sm-2">
                                    <label>Giới Tính </label>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <label class="radio-inline">
                                        <input name="gender" value="1" type="radio" 
                                        @if(Auth::user()->chitiet->gender == 1)
                                        {{"checked"}}
                                        @endif
                                        >Nam
                                    </label>
                                    <label class="radio-inline">
                                        <input name="gender" value="0"  type="radio"
                                        @if(Auth::user()->chitiet->gender == 0)
                                        {{"checked"}}
                                        @endif
                                        >Nữ
                                    </label>
                                </div>    
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-2">
                                    <label class="control-label pull-left">Đổi mật khẩu</label>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <label>Muốn đổi mật khẩu</label><a href="thongtintaikhoan/#modal-changepassmem" style="color: red" > ở đây</a>.
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-2 col-sm-offset-2">
                                    <button type="submit" id="change_infor" class="btn btn-danger">Cập nhật</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .infomation .form-group
    {
        margin-bottom: 10px;
        overflow: hidden;
    }

    #modal-changepassmem label
    {
        position: relative;
        right:0;
    }
</style>
<!-- popup đăng nhập -->
<div class="remodal" data-remodal-id="modal-changepassmem" >
    <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    <div class="register">
 

        @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif
        <form action="changepass" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <h3>Đổi mật khẩu!</h3>
            <div class="form-group">
                <label class="control-label pull-left">Mật khẩu cũ</label>
                <input type="password" id="password" name="password" class="form-control input-lg"  required/>
            </div>
            <div class="form-group">
                <div class="clearfix">
                    <label class="control-label pull-left">Mật khẩu mới</label>
                </div>
                <input type="password" id="passwordnews" name="passwordnews" class="form-control input-lg"  required/>
            </div>
            <div class="form-group">
                <div class="clearfix">
                    <label class="control-label pull-left">Xác nhận mật khẩu mới</label>
                </div>
                <input type="password" id="repasswordnews" name="repasswordnews" class="form-control input-lg"  required/>
            </div>
            <div class="form-group">
                <button type="submit"  class="btn btn-lg btn-block btn-login btn-green">Đổi mật khẩu</button>
            </div>
        </form>
    </div>
</div>
 <script>
 var password = document.getElementById("passwordnews")
  , confirm_password = document.getElementById("repasswordnews");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Mật khẩu chưa trùng khớp");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 
 </script>
<!-- end popup đăng nhập -->
<script>
    $(document).ready(function () {
        $("#changeinforCustomer").validate({
            rules: {
                name: {
                    required: true,
                },
                address: {
                    required: true,
                },
                mobile: {
                    minlength: 10,
                    number: true
                },
            },
            messages: {
                name: {
                    required: "Vui lòng nhập họ tên",
                },
                address: {
                    required: "Vui lòng nhập địa chỉ",
                },
                mobile: {
                    minlength: "Số điện thoại ít nhất 10 số!",
                    number: "Số điện thoại chỉ bao gồm số!"
                },
            },
            submitHandler: function () {
                var d = $("#changeinforCustomer").serialize();
                var urlChangeInfor = "/Ajax/Member/ChangeInfor";
                $("#change_infor").unbind("click").text("Đang cập nhật...");
                $.post(urlChangeInfor, d, function (msg) {
                    if (msg.Erros == false) {
                        swal("Thành công!", "Chúc mừng bạn đã cập nhật thành công!", "success");
                        setInterval(function () {
                            window.location.href = "/profile-customer";
                        }, 3000);
                    } else {
                        swal(msg.errormessage, "error");
                        $("#change_infor").text("Cập nhật");
                    }
                }, "json");
            },
        });

    });
    //Đổi mật khẩu
    $(document).ready(function () {
        var urlChangePass = "/Ajax/Member/ChangePass";
        $("#ChangePasswordMember").validate({
            rules: {
                passwordform2: {
                    required: true
                },
                passwordnewsform2: {
                    required: true
                },
                repasswordnewsform2: {
                    required: true
                }
            },
            messages: {
                passwordform2: {
                    required: "Bạn chưa nhập mật khẩu cũ!",
                },
                passwordnewsform2: {
                    required: "Bạn chưa nhập mật khẩu mới!",
                },
                repasswordnewsform2: {
                    required: "Bạn chưa nhập mật lại khẩu mới!",
                }
            },
            submitHandler: function () {
                debugger
                if ($("#repasswordnewsform2").val() == $("#passwordnewsform2").val()) {
                    $.get(urlChangePass, $("#ChangePasswordMember").serialize(), function (msg) {
                        if (msg.Erros == true) {
                            swal("Không thành công!", msg.Message, "error");
                            setInterval(function () {
                            }, 2000);
                        } else {
                            swal("Thành công!", "Chúc mừng bạn đã cập nhập mật khẩu thành công!", "success");
                            setInterval(function () {
                                window.location.href = "/profile-customer";
                            }, 2000);

                        }
                    });
                } else {
                    swal("Không thành công!", "Nhập lại mật khẩu không đúng!", "error");
                }
            },
        });
    });
</script>
@endsection