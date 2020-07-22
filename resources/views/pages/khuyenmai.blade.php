@extends('layout.index')
@section('content')
</div>
    <div class="main cre">
        <div class="container">
            <div class="list-mn over">
                <ul class="ul">
                    <li><a href="">Trang chủ</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                    
                    <li class="active"><a> Khuyến m&#227;i</a></li>
                </ul>
            </div>
            <div class="row row-s">                
                <div class="col-xs-12 col-sm-9 col-s">
                    <div class="main-content show-itemx">
                        <h1>Khuyến m&#227;i</h1>
                        <div class="news-list" id="page-new">
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-s">
                    <div class="list-menu over">
    <h3>Tin nổi bật</h3>
    <ul class="ul feature-news">
                <li><a href="/tin-tuc/truoc-luot-ve-ban-ket-champions-league-vo-vong" title="Trước lượt về b&#225;n kết Champions League: V&#244; vọng" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Trước lượt về b&#225;n kết Champions League: V&#244; vọng</a></li>
                <li><a href="/tin-tuc/luot-ve-ban-ket-champions-league-lam-the-nao-de-lat-do-1-real-madrid-dang-hung-huc-khi-the" title="Lượt về b&#225;n kết Champions League  :L&#224;m thế n&#224;o để  lật đổ 1 Real đang hừng hực kh&#237; thế " class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Lượt về b&#225;n kết Champions League  :L&#224;m thế n&#224;o để  lật đổ 1 Real đang hừng hực kh&#237; thế </a></li>
                <li><a href="/tin-tuc/arsenal-cham-dut-chuoi-25-tran-bat-bai-cua-m-u" title="Arsenal chấm dứt chuỗi 25 trận bất bại của M.U" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Arsenal chấm dứt chuỗi 25 trận bất bại của M.U</a></li>
                <li><a href="/tin-tuc/milner-sut-hong-11m-liverpool-hoa-that-vong-southampton" title="Milner s&#250;t hỏng 11m, Liverpool h&#242;a thất vọng Southampton" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Milner s&#250;t hỏng 11m, Liverpool h&#242;a thất vọng Southampton</a></li>
                <li><a href="/tin-tuc/nhan-dinh-bong-da-monaco-vs-juventus-01h45-ngay-4-5-lao-ba-lao-dao" title="Nhận định b&#243;ng đ&#225; Monaco vs Juventus, 01h45 ng&#224;y 4/5: L&#227;o b&#224; lao đao" class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>Nhận định b&#243;ng đ&#225; Monaco vs Juventus, 01h45 ng&#224;y 4/5: L&#227;o b&#224; lao đao</a></li>
    </ul>
</div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            initAjaxLoad("/Ajax/Content/PartialNews?seolink=khuyen-mai",
                "#page-new");
        });
    </script>
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