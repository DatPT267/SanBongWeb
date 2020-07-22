@extends('layout.index')
@section('content')
<div class="main">
    <div class="calendar-ball over">
        <div class="container">
            <div class="list-mn over">
                <ul class="ul">
                    <li><a href="/">Trang chủ</a></li>
                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                    <li class="active" ><a>{{$tr->name}}</a></li>
                </ul>
            </div>
            <div class="over">
                <div class="title-item over" id="item-positon">
                <h1>{{$tr->name}}</h1>
                </div>
                <div class="item-map over" style="position: relative">
                    <h3>thông tin</h3>
                    <p>
                        <img src="/Content/html/images/map.png" alt="" title="">Vị trí: {{$tr->chitiet}}
                    </p>
                    <p>
                        <img src="/Content/html/images/san.png" alt="" title="">Số lượng sân: {{$count}}
                    </p>
                    <p>
                        <img src="/Content/html/images/phone.png" alt="" title="">Điện thoại: 0773354138
                    </p>
                    <p style="padding: 0;position: static"><a href="#" id="view-detail">Xem chi tiết</a></p>
                </div>
                <div class="map over">
                        {!! $tr->bando !!}
                </div>
            </div>
            <div class="detail-news">
                <div class="over detail" style="display: none" id="more-content">
                    <p><img alt="" src="/Uploads/images/san%20pvv.jpg" /></p>

                    <ul>
                        <li><em>Cho thuê các sân bóng mini</em></li>
                        <li><em>Hoạt động vào khung giờ hành chính</em></li>
                     
                    </ul>

                    <p><iframe allowfullscreen="" frameborder="0" scrolling="no"
                        src="https://www.youtube.com/embed/3GBpAOUN0hI"></iframe></p>

                    <div>
                        <a href="#" id="btnCancelMore">Thu lại</a>
                    </div>
                </div>
            </div>
            <div class="balle over" style="margin-top: 12px;background: white">
                <div class="title-balle over" style="padding: 7px 0">
                    <form id="frmFild" method="POST">
                        <div class="col-xs-12 col-sm-2 col-s">
                            <label style="margin-top: 5px;">Tìm sân trống</label>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-s mtbt">
                            <input type="text" class="form-control date_choise" placeholder="Ngày" id="date_choise"
                                name="date_choise" value="" />
                            <script type="text/javascript">
                                var dateToday = new Date();
                                $('.date_choise').datepicker({
                                    'format': 'd/m/yyyy',
                                    'autoclose': true,
                                    'startDate': dateToday
                                });
                            </script>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-s mtbt">
                            <select class="form-control" id="time_zone_choie" name="time_zone_choie">
                                <option value="">Khung giờ</option>
                                <option value="1">07:00 - 08:30</option>
                                <option value="2">08:30 - 10:00</option>
                                <option value="3">10:00 - 11:30</option>
                                <option value="5">13:00 - 14:30</option>
                                <option value="6">14:30 - 16:00</option>
                                <option value="7">16:00 - 17:30</option>
                                <option value="8">17:30 - 19:00</option>
                                <option value="9">19:00 - 20:30</option>
                                <option value="10">20:30 - 22:00</option>
                                <option value="11">22:00 - 23:30</option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-s">
                            <button type="button" class="btn delay bg" id="btnFild"
                                style="border-radius: 0; padding: 6px 30px;">
                                Tìm
                            </button>
                        </div>
                    </form>
                </div>
                <div class="show-balle">
                    <div class="row" id="ListFieldItems">
                        @foreach($tr->phongtn as $ph)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="item delay over">
                                <a href="dstruong/{{$quan}}/{{$truong}}/{{$ph->tenkhongdau}}" title="S&#226;n 1">
                                        <img src="upload/phong/{{$ph->image}}" style="height: 70%;width: 100%; " alt="S&#226;n 1" title="S&#226;n 1" />
                                        <h3>Sân {{$ph->name}} </h3>
                                        <h4 class="delay">Đặt Sân</h4>
                                    </a>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="fb-comments" data-href="http://datsanonline.com.vn/san-bong-pvv" data-numposts="5"
                data-width="100%"></div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $("#btnFild").click(function () {
            if ($("#frmFild").valid()) {
                $("#ListFieldItems").html('Đang tải dữ liệu...');
                $.ajax({
                    type: "POST",
                    url: '/Ajax/Content/PartialFieldFill' + "?date=" + $("#date_choise").val() + "&field_choice=1&time_zone=" + $("#time_zone_choie").val(),
                    dataType: "text",
                    success: function (data) {
                        $("#ListFieldItems").html(data);
                    }
                });
            }
        });
        $("#frmFild").validate({
            rules: {
                date_choise: {
                    required: true
                },
                time_zone_choie: {
                    required: true
                },
            },
            messages: {
                date_choise: {
                    required: "*",
                },
                time_zone_choie: {
                    required: "*",
                },
            }
        });
    });
</script>
<style>
    a#view-detail {
        color: white;
        display: inline-block;
        border: 1px solid white;
        padding: 4px 10px;
        position: absolute;
        bottom: 10px;
    }

    a#btnCancelMore {
        background: #15a10d;
        color: white;
        display: inline-block;
        padding: 5px 15px;
        margin-top: 10px;
    }
</style>
<!-- slyder-home -->
@endsection