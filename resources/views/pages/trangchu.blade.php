@extends('layout.index')
@section('content')
<div class="main">
    <div class="title-main">
        <div class="container">
            <div class="show-title-main">
                <h2>Chào mừng các bạn đến với khu sân bóng mini Đà Nẵng</h2>
                <span>Đặt sân nhanh chóng và tiện lợi</span>
            </div>
            <div class="slyder-content slider">
                        
                        @foreach($truong->all() as $tr)
                        <div class="item">
                            <div class="show-item text-center over panel">
                                <div class="show-item-img over">
                                <a href="dstruong/{{$tr->quan}}/{{$tr->namekhongdau}}"><img src="upload/truong/{{$tr['image']}}" layout="responsive" alt="Sân bóng {{$tr['name']}}" title="Sân bóng {{$tr['name']}}"></a>
                                </div>
                                <h3><a href="" class="delay"> {{$tr['name']}}</a></h3>
                            </div>
                        </div>
                        @endforeach        
                       
                      
            </div>
        </div>
    </div>
    <div class="new-main">
        <div class="container">
            <div class="tab-new">

                <div class="">
                    <div class="col-xs-12 col-sm-9 col-s">
                            <div id="tim-doi" class="tab-pane fade in active">
                                <div class="row row-s">
                                    <div class="col-xs-12 col-sm-12 col-s">
                                        <div class="title-ball-leng over mg-bt">
                                            <h3 class="pull-left"><a href="/tim-doi" style="color: white">Tìm đối tác</a></h3>

                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                            <div id="san-gio-vang" class="tab-pane fade in active">
                                <div class="row row-s">
                                    <div class="col-xs-12 col-sm-12 col-s">
                                        <div class="title-ball-leng over mg-bt">
                                            <h3 class="pull-left"><a href="/san-gio-vang" style="color: white">Sân tốt</a></h3>

                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                            <div id="tin-tuc" class="tab-pane fade in active">
                                <div class="row row-s">
                                    <div class="col-xs-12 col-sm-12 col-s">
                                        <div class="title-ball-leng over mg-bt">
                                            <h3 class="pull-left"><a href="/tin-tuc" style="color: white">Tin tức </a></h3>

                                        </div>
                                                <div class="row row-s">
                                                    <div class="col-xs-12 col-sm-8 col-s">
                                                        <div class="item-ball over">
                                                            <div class="img pull-left">
                                                                <a href="/tin-tuc/gioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen"><img src="admin_asset1/css/Uploads/images/tin-tuc/sanco-pc.jpg" alt="Giới thiệu về đặt s&#226;n v&#224; t&#236;m đối trực tuyến" title="Giới thiệu về đặt s&#226;n v&#224; t&#236;m đối trực tuyến"></a>

                                                            </div>
                                                            <div class="text-item-ball over">
                                                                <a href="/tin-tuc/gioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen" title="Giới thiệu về đặt s&#226;n v&#224; t&#236;m đối trực tuyến">Giới thiệu về đặt sân và tìm sân trực tuyến</a>
                                                                <p>đặt sân và tìm sân trực tuyến</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-4 col-s">
                                                        <div class="link-ball over">
                                                            <ul class="ul">
                                                                    <li>
                                                                        <a href="/tin-tuc/10-ban-hop-dong-dat-gia-nhat-moi-thoi-dai"><i class="fa fa-caret-right" aria-hidden="true"></i>Sân bóng chuẩn trang thiết bị - Giá Rẻ - Thuê ngắn hoặc dài hạn tùy nhu cầu. Chuyên nghiệp, Chất lượng.</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/tin-tuc/truoc-luot-ve-ban-ket-champions-league-vo-vong"><i class="fa fa-caret-right" aria-hidden="true"></i>Sở hữu sân bóng tiện nghi, thoáng mát, bàn ghế mới, có trang bị bảng, dụng cụ học tập. </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/tin-tuc/luot-ve-ban-ket-champions-league-lam-the-nao-de-lat-do-1-real-madrid-dang-hung-huc-khi-the"><i class="fa fa-caret-right" aria-hidden="true"></i>Sân bóng có sức chứa 12-30 người. Được trang bị đầy đủ các thiết bị hiện đại: hệ thống máy chiếu, đèn chiếu sáng, flipchart, máy lạnh, wifi miễn phí.</a>
                                                                    </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>                                   
                                </div>
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-s hidden-xs">
                                        <div class="banerw">
                <a href="/tin-tuc" target="_blank"><img src="admin_asset1/css/Uploads/files/tim-doi/sanco.png" alt="giolamviec" title="hướng dẫn t&#236;m đối" ></a>
            </div>
            <div class="banerw">
                <a href="" target="_blank"><img src="admin_asset1/css/Uploads/files/datsan.jpg" alt="bannersmall" title="B&#243;ng đ&#225; fan" ></a>
            </div>
            <div class="banerw">
                <a href="" target="_blank"><img src="admin_asset1/css/Uploads/files/datsan3.jpg" alt="images" title="fan page" ></a>
            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection