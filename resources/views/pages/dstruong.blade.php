@extends('layout.index')
@section('content')
<div class="main cre">
    <div class="container">
        <div class="list-mn over">
            <ul class="ul">
                <li><a href="/">Trang chủ</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <li class="active"><a>Đặt sân</a></li>
            </ul>
        </div>
        <div class="row row-s">
            <div class="col-xs-12 col-sm-3 col-s">

                <div class="list-menu over">
                    <h3>Đà Nẵng</h3>
                    <ul class="ul">
                        <li class="">
                            <a href="dstruong/hai-chau" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Hải
                                Châu</a>
                        </li>
                        <li class="">
                            <a href="dstruong/cam-le" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Cẩm
                                Lệ</a>
                        </li>
                        <li class="">
                            <a href="dstruong/thanh-khe" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Thanh
                                Khê</a>
                        </li>
                        <li class="">
                            <a href="dstruong/lien-chieu" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Liên
                                Chiểu</a>
                        </li>
                        <li class="">
                            <a href="dstruong/ngu-hanh-son" class="delay"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i>Ngũ Hành Sơn</a>
                        </li>
                        <li class="">
                            <a href="dstruong/son-tra" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Sơn
                                Trà</a>
                        </li>
                        <li class="">
                            <a href="dstruong/hoa-vang" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Hòa
                                Vang</a>
                        </li>
                        <li class="">
                            <a href="dstruong/hoang-sa" class="delay"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i>Hoàng Sa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-s">
                <div class="show-itemx">
                    <h1>danh sách sân</h1>
                    <div class="row row-s lists" id="lists-groupfield">
                        @foreach($tr as $truong)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-s">
                                <div class="show-item text-center over">
                                    <div class="show-item-img over">
                                    <a href="dstruong/{{$quan}}/{{$truong->namekhongdau}}" title="{{$truong->name}}">
                                            <img src="upload/truong/{{$truong->image}}" alt="{{$truong->name}}" title="{{$truong->name}}">
                                        </a>
                                    </div>
                                <h3><a href="/san-bong-pvv" class="delay">{{$truong->name}}</a></h3>
                                </div>
                            </div>

                        @endforeach
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    $(function () {
        initAjaxLoad("/Ajax/Content/PartialAllGroupField", "#lists-groupfield");
    });
</script> --}}
@endsection