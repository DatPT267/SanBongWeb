@extends('layout.index')
@section('content')
<div class="main cre">
    <div class="container">
        <div class="list-mn over">
            <ul class="ul">
                <li><a href="">Trang chủ</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <li><a href="/tin-tuc">Tin tức </a></li>

            </ul>
        </div>
        <div class="row row-s">
            <div class="col-xs-12 col-sm-9 col-s">
                <div class="main-content show-itemx">
                <h1>{{$tintuc->TieuDe}}</h1>
                    <div class="w-dtnews well well-sm">
                        <div class="text-right">
                        <span>{{$tintuc->created_at}}</span>
                        </div>
                    </div>
                    <div class="detail-news">
                        <div class="detail">
                            {{-- <p><strong>KÊNH ĐẶT SÂN VÀ TÌM ĐỐI HÀNG ĐẦU VIÊT NAM</strong></p>

                            <p><strong>Đặt sân và tìm đối trực tuyến</strong> mang lại sự tiện lợi,chức năng đa dạng hơn
                                và các dịch vụ tốt hơn cho người sử dụng thế nhưng người yêu bóng đá việt nam vẫn chưa
                                tận hưởng được những tiện ích đó chính vì vậy đặt sân nhanh được triển khai với mong
                                muốn trở thành sân chơi về sân bóng số 1 tại việt nam nơi bạn có thể lựa chọn mọi thứ
                                được đặt sân và tìm đối hoàn toàn miễn phí,không những đó bạn còn được hưởng các khuyến
                                mãi của các chủ sân</p>

                            <p style="text-align: center;"><img alt="đặt sân và tìm đối thủ"
                                    src="/Uploads/images/tin-tuc/anh-em.png" style="height: 140px; width: 272px;"></p>

                            <p>Tại <strong>datsanonline.com.vn </strong>bạn có thể đặt sân với giá rẻ nhất và có bảng
                                giá nhất định.Ngoài chức năng chính là đặt sân chúng tôi còn cung cấp cho bạn chức năng
                                tìm đối với hàng nghìn đối mỗi ngày cùng cộng đồng các tập thể đối bọng rộng lớn.Các
                                chức năng hoạt động với một sự thống nhất và chặt chẽ bạn chỉ cần click chuột. Dù bạn là
                                một nhà quản lý bận rộn với công việc hay là người làm việc bình thường với danh sách
                                dài việc phải làm , chắc chắn bạn cũng sẽ yêu thích trải nghiệm cùng
                                datsanonline.com.vn-dăt sân và tìm đối<strong> trực tuyến dễ dàng hơn, thuận tiện hơn và
                                    tiết kiệm thời gian.</strong></p> --}}
                                    {!! $tintuc->NoiDung !!}

                        </div>
                        <div class="share">
                            <div class="share-detail clearfix" style="padding-top:20px;">
                                <div class="addthis_native_toolbox pull-left"
                                    data-url="http://datsanonline.com.vn/tin-tuc/gioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen"
                                    data-title="Giới thiệu về đặt sân và tìm đối trực tuyến"
                                    data-description="Giới thiệu về đặt sân và tìm đối trực tuyến KÊNH ĐẶT SÂN VÀ TÌM ĐỐI HÀNG ĐẦU VIÊT NAM">
                                    <div id="atstbx"
                                        class="at-share-tbx-element at-share-tbx-native addthis_default_style addthis_20x20_style addthis-smartlayers addthis-animated at4-show">
                                        <a class="addthis_button_facebook_like at_native_button at300b"
                                            fb:like:layout="button_count">
                                            <div class="fb-like fb_iframe_widget" data-layout="button_count"
                                                data-show_faces="false" data-share="false" data-action="like"
                                                data-width="90" data-height="25" data-font="arial"
                                                data-href="http://datsanonline.com.vn/tin-tuc/gioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen"
                                                data-send="false" style="height: 25px;" fb-xfbml-state="rendered"
                                                fb-iframe-plugin-query="action=like&amp;app_id=612720708938941&amp;container_width=76&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Fdatsanonline.com.vn%2Ftin-tuc%2Fgioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90">
                                                <span style="vertical-align: bottom; width: 76px; height: 20px;"><iframe
                                                        name="f2ed0631524abec" width="90px" height="25px"
                                                        title="fb:like Facebook Social Plugin" frameborder="0"
                                                        allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                        allow="encrypted-media"
                                                        src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=612720708938941&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df11e4c4d76f7a8%26domain%3Ddatsanonline.com.vn%26origin%3Dhttp%253A%252F%252Fdatsanonline.com.vn%252Ff313ad286b6ba48%26relation%3Dparent.parent&amp;container_width=76&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Fdatsanonline.com.vn%2Ftin-tuc%2Fgioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"
                                                        style="border: none; visibility: visible; width: 76px; height: 20px;"
                                                        class=""></iframe></span></div>
                                        </a><a class="addthis_button_google_plusone at_native_button"></a><a
                                            class="addthis_button_facebook_share at_native_button at300b"
                                            fb:share:layout="button_count">
                                            <div class="fb-share-button fb_iframe_widget" data-layout="button_count"
                                                data-href="http://datsanonline.com.vn/tin-tuc/gioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen"
                                                style="height: 25px;" fb-xfbml-state="rendered"
                                                fb-iframe-plugin-query="app_id=612720708938941&amp;container_width=86&amp;href=http%3A%2F%2Fdatsanonline.com.vn%2Ftin-tuc%2Fgioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey">
                                                <span style="vertical-align: bottom; width: 86px; height: 20px;"><iframe
                                                        name="f2af3a19d42aed" width="1000px" height="1000px"
                                                        title="fb:share_button Facebook Social Plugin" frameborder="0"
                                                        allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                        allow="encrypted-media"
                                                        src="https://www.facebook.com/v2.8/plugins/share_button.php?app_id=612720708938941&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Dfa8287ca997efc%26domain%3Ddatsanonline.com.vn%26origin%3Dhttp%253A%252F%252Fdatsanonline.com.vn%252Ff313ad286b6ba48%26relation%3Dparent.parent&amp;container_width=86&amp;href=http%3A%2F%2Fdatsanonline.com.vn%2Ftin-tuc%2Fgioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey"
                                                        style="border: none; visibility: visible; width: 86px; height: 20px;"
                                                        class=""></iframe></span></div>
                                        </a><a class="addthis_button_facebook_send at_native_button at300b">
                                            <div class="fb-send"
                                                data-href="http://datsanonline.com.vn/tin-tuc/gioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen"
                                                data-type="box_count" style="height: 25px;"></div>
                                        </a><a class="addthis_button_tweet at_native_button at300b">
                                            <div class="tweet_iframe_widget" style="width: 62px; height: 25px;">
                                                <span><iframe id="twitter-widget-0" scrolling="no" frameborder="0"
                                                        allowtransparency="true" allowfullscreen="true"
                                                        class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                                                        style="position: static; visibility: visible; width: 1px; height: 1px;"
                                                        title="Twitter Tweet Button"
                                                        src="https://platform.twitter.com/widgets/tweet_button.6a44a9d26983bbb5b04ae399f9e496fe.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fdatsanonline.com.vn%2Ftin-tuc%2Fgioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen&amp;size=m&amp;text=Gi%E1%BB%9Bi%20thi%E1%BB%87u%20v%E1%BB%81%20%C4%91%E1%BA%B7t%20s%C3%A2n%20v%C3%A0%20t%C3%ACm%20%C4%91%E1%BB%91i%20tr%E1%BB%B1c%20tuy%E1%BA%BFn%3A&amp;time=1575650589133&amp;type=share&amp;url=http%3A%2F%2Fdatsanonline.com.vn%2Ftin-tuc%2Fgioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen%23.XeqFHNINivo.twitter"
                                                        data-url="http://datsanonline.com.vn/tin-tuc/gioi-thieu-ve-dat-san-va-tim-doi-truc-tuyen#.XeqFHNINivo.twitter"></iframe></span>
                                            </div>
                                        </a>
                                        <div class="atclear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="other">

                        <div class="list-menu other-news over">
                            <h3>Tin khác</h3>
                            <ul class="ul feature-news">
                                @foreach($tintuckhac as $ttk)
                            <li><a href="tintuc/{{$ttk->TieuDeKhongDau}}" title="Sân bóng Hoàng Phong"
                                        class="delay"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$ttk->TieuDe}} <span>- ({{$ttk->created_at}})</span></a> </li>
                                @endforeach
                            </ul>
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
@endsection