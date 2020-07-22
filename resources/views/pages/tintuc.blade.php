@extends('layout.index')
@section('content')
<div class="main cre">
    <div class="container">
        <div class="list-mn over">
            <ul class="ul">
                <li><a href="">Trang chủ</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>

                <li class="active"><a> Tin tức </a></li>
            </ul>
        </div>
        <div class="row row-s">
            <div class="col-xs-12 col-sm-9 col-s">
                <div class="main-content show-itemx">
                    <h1>Tin tức </h1>
                    <div class="news-list" id="page-new">
                        <div class="main-content show-itemx">
                           
                            <div class="news-list" id="page-new">
                                <div class="news">
                                    <div class="img">
                                        <a href="/danh-sach-san/san-bong-viettel-2" title="Sân bóng Viettel 2">
                                            <img src="admin_asset1\css\Uploads\images\binhduong.jpg"></a>
                                    </div>
                                    <div class="desc">
                                        <h3><a href="/danh-sach-san/san-bong-viettel-2" title="Sân bóng Viettel 2">Kết quả thi đấu V Leagua Vòng 19</a></h3>
                                        <div class="time"><i class="fa fa-clock-o color-red"></i>2019-12-27 12:53:27</div>
                                        <div class="short-desc">
                                            <p> Với sự xuất sắc của Công Phượng, TP.HCM thể hiện sự hiệu quả vượt trội trước Quảng Ninh</p>
                                        </div>
                                        <a href="/danh-sach-san/san-bong-viettel-2" title="Sân bóng Viettel 2" class="btn-detail">Chi tiết</a>
                                    </div>
                                </div>
                                @foreach($tintuc as $tt)
                                    <div class="news">
                                        <div class="img">
                                        <a href="tintuc/{{$tt->TieuDeKhongDau}}" title="{{$tt->TieuDe}}">
                                                <img src="upload/tintuc/{{$tt->Hinh}}"></a>
                                        </div>
                                        <div class="desc">
                                        <h3><a href="tintuc/{{$tt->TieuDeKhongDau}}" title="{{$tt->TieuDe}}">{{$tt->TieuDe}}</a></h3>
                                        <div class="time"><i class="fa fa-clock-o color-red"></i>{{$tt->created_at}}</div>
                                        <div class="short-desc" >
                                            <p style="margin-bottom: 10px">{!!$tt->TomTat!!}</p>
                                        </div>
                                        <a href="tintuc/{{$tt->TieuDeKhongDau}}" title="{{$tt->TieuDe}}" class="btn-detail">Chi tiết</a>
                                        </div>
                                    </div> 
                                    
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-s">
                <div class="list-menu over">
                    <h3>Tin nổi bật</h3>
                    <ul class="ul feature-news">
                        @foreach($tintucnoibat as $ttnb)
                            <li><a href="tintuc/{{$ttnb->TieuDeKhongDau}}"
                            title="{{$ttnb->TieuDe}}"
                                class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$ttnb->TieuDe}}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    .main-content.show-itemx {
        background: none;
        box-shadow: 0px 0px 0px 0px;
        padding: 12px 0;
    }

    .news {
        background: white;
        padding: 12px !important;
        border-radius: 4px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.46);
        margin-bottom: 10px;
        border: none !important;
    }
</style>
<!-- slyder-home -->
@endsection