<div class="header delay">
    <div class="container">
        <div class="logo delay">
            <a href="/SanBongWeb/public/trangchu">

                <img src="image/logo-datsan.png" alt="ĐẶT SÂN NHANH" title="ĐẶT SÂN NHANH" class="delay">

            </a>
        </div>
        <div class="menu delay">
            <nav id="mainMenu">
                <ul class="mainMenu delay">
                        <li><a href="trangchu" title="Trang chủ">Trang chủ</a></li>
                        <li>
                            <a href="dstruong\ngu-hanh-son" title="Đặt sân">Đặt Sân</a>
                                <ul class="subMenu">
                                        <li><a href="timdoitac" title="Tìm đối tác">Tìm đối tác</a></li>
                                        <li><a href="quanlytimdoi" title="Đăng tin tìm đối">Đăng tin tìm đối tác</a></li>
                                     
                                </ul>
                        </li>
                        <li>
                            <a href="khuyenmai" title="Khuyến mãi">Sự kiện</a>
                        </li>
                        <li>
                            <a href="khachhang" title="KH&#193;CH H&#192;NG">KHÁCH HÀNG</a>
                        </li>
                        <li>
                            <a href="tintuc" title="Tin tức ">Tin tức </a>
                                <ul class="subMenu">
                                        <li><a href="/danh-sach-san" title="Danh s&#225;ch s&#226;n">Danh sách sân</a></li>
                                </ul>
                        </li>
                </ul>
            </nav>
            <button id="button-toggle-menu" class="visible-xs"><i class="fa fa-bars"></i></button>
        </div>
        <div class="leng-item">
            <ul class="ul">
                <li>
                    <a href="javascript:void(0)" class="on-serach"><i class="fa fa-search delay" aria-hidden="true"></i></a>
                    <div class="show-serach delay">
                        <div class="search">
                            <form action="tim-kiem">
                                <input type="text" name="q" class="form-control input-sm" maxlength="64" placeholder="Tìm kiếm" />
                                <button type="submit" class="btn btn-sm">Search</button>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <img src="admin_asset1/css/Content/html/images/dk.png" style="margin-top: 3px;" class="dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::check())
                            <ul class="dropdown-menu">
                                <li style="color: black;padding:10px;">Xin chào, {{Auth::user()->name}}</li>
                                <li><a href="thongtintaikhoan" title="Thông tin tài khoản">Thông tin tài khoản</a></li>
                               
                                <li><a href="/hop-thu-den" title="Trạng thái sân">Tin nhắn</a></li>
                                <li><a href="{{ route('logout') }}" class="log-out-acc" title="Thoát">Thoát</a></li>
                            </ul>
                          
                        @else
                        <ul class="dropdown-menu">
                            <li><a href="admin/dangnhap">Quản trị</a></li>
                            <li><a href="trangchu#login">Thành viên</a></li>
                        </ul>
                        @endif
                        
                        
                    </div>
                </li>
                <li><i class="fa fa-phone" aria-hidden="true"></i><span> <a href="tel:0917665155">0773.354.138</a></span></li>
            </ul>
        </div>
    </div>
    <!-- popup đăng ký -->
    <div class="remodal" data-remodal-id="register" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" data-remodal-options="closeOnOutsideClick: false">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        
        <div class="register">
            <div class="alert alert-danger" id="errorsForm" style="display: none">
        
            </div>
            <form id="formRegister" method="post" action="dangky" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <h3>Đăng ký tài khoản</h3>
                <div class="form-group">
                    <label class="control-label pull-left">HỌ VÀ TÊN</label>
                    <input type="text" id="iptResName" name="name" class="form-control" />
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <label class="control-label pull-left">EMAIL</label>
                    <input type="email" id="iptResEmail" name="email" class="form-control" />
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <label class="control-label pull-left">SỐ ĐIỆN THOẠI</label>
                    <input type="text" id="iptResMobile" name="sdt" class="form-control" />
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                        <label class="control-label pull-left">MÀU YÊU THÍCH</label>
                        <input type="color" id="iptResMobile" name="color" class="form-control" />
                    </div>
                <div class="form-group">
                    <label class="control-label pull-left">Mật khẩu</label>
                    <input type="password" id="iptResPass" name="password" class="form-control" />
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <label class="control-label pull-left">NHẬP LẠI MẬT KHẨU</label>
                    <input type="password" id="iptResCofPass" name="passwordAgain" class="form-control" />
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
                <div class="form-group text-center">
                    <ul class="ul over">
                        <li><button type="submit"  class="btn btn-lg btn-block btn-green">Đăng ký</button></li>
                        <li><b style="font-weight: 600"><a href="trangchu#login" title="" class="color-green" style="font-size: 13.4px">Đăng nhập tại đây</a></b></li>
                    </ul>
                </div>


                <input type="hidden" name="urlback" />
            </form>
        </div>
    </div>
    <!-- end popup đăng ký -->
    <!-- popup đăng nhập -->
    <div class="remodal" data-remodal-id="login" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" data-remodal-options="closeOnOutsideClick: false">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div class="register">
            <form  method="post" action="dangnhap"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <h3>Chào mừng bạn quay trở lại!</h3>
                <div class="form-group">
                    <label class="control-label pull-left">EMAIL</label>
                    <input type="text"  name="email" class="form-control input-lg" />
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <label class="control-label pull-left">MẬT KHẨU</label>
                        <div class="pull-right"></div>
                    </div>
                    <input type="password" name="password" class="form-control input-lg" />
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
                <div class="form-group text-center">
                    <ul class="ul over">
                        <li><button type="submit" id="log-acc" class="btn btn-green">Đăng nhập</button></li>
                        <li><b style="font-weight: 600"> <a href="trangchu#register" title="" class="color-green">Đăng ký ngay</a></b></li>
                        <li><b style="font-weight: 600"><a href="#forgot-password" title="Khôi phục mật khẩu" class="color-green pull-right">Quên mật khẩu</a></b></li>
                    </ul>
                </div>
                <input type="hidden" name="urlback" />
            </form>
        </div>
    </div>
    <!-- end popup đăng nhập -->
    
    <!-- quên pass -->
    <div class="remodal" data-remodal-id="forgot-password" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" data-remodal-options="closeOnOutsideClick: false">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div class="register">
            <form id="form-forgot-pass" action="/Ajax/Member/ForgotPass">
                <h3>Khôi phục mật khẩu</h3>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="text" name="forgotPassEmail" id="forgotPassEmail" class="form-control input-lg" />
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <div class="form-group text-center">
                    <ul class="ul over">
                        <li><button type="submit" id="btn-send-forgot-pass" class="btn btn-lg btn-block btn-green">Gửi đi</button></li>
                        <li><b style="font-weight: 600"> <a href="/#register" title="" class="color-green" style="font-size: 13.4px">Đăng ký tại đây</a></b></li>
                        <li><b style="font-weight: 600"><a href="/#login" title="" class="color-green" style="font-size: 13.4px">Đăng nhập tại đây</a></b></li>
                    </ul>
                </div>

            </form>
        </div>
    </div>
    <!-- end popup quên pass -->
 
</div>
<script>
    $(function () {
        $("#btnSearch").click(function () {
            if ($("#frmSearch").valid()) {
                $("#frmSearch").submit();
            }
        });
        $("#frmSearch").validate({
            rules: {
                district_choice: {
                    required: true
                },
                date: {
                    required: true
                },
                //time_zone: {
                //    required: true
                //},
            },
            messages: {
                district_choice: {
                    required: "*",
                },
                date: {
                    required: "*",
                },
                //time_zone: {
                //    required: "*",
                //},
            }
        });
        $("#district_choice").change(function () {
            var city = $(this).val();
            if (city == '')
                city = 0;
            $.post("/Ajax/Home/GetListField", { ID: city }, function (data) {
                //var html = '';
                //$.each(data, function (i, item) {
                //    html += '<option value="' + item.ID + '">' + item.Name + '</option>';
                //});
                //$("#field_choice").empty();
                //$("#field_choice").append('<option value="">Chọn sân</option>');
                $("#field_choice").html(data);
            });
        });
        
        
    });

</script>


<style>
    .voic i {
        position: absolute;
        top: 12px;
        right: 11px;
    }
</style>
        