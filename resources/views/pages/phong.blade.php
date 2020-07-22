@extends('layout.index')
@section('content')
<div class="set slyderDisplay">

    </div>
    <div class="main">
        <div class="calendar-ball ">
            <div class="container">
                <div class="list-mn over">
                    <ul class="ul">
                        <li><a href="/">Trang chủ</a></li>
                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                        <li class="active"><a>{{$tr->name}}</a></li> 
                    </ul>
                </div>
                <div class="over" id="item-positon">
                    <div class="title-item ">
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
                            <li><em>Cho mượn các sân học và sân thực hành</em></li>
                            <li><em>Hoạt động vào khung giờ hành chính</em></li>
                        </ul>
    
                        <p><iframe allowfullscreen="" frameborder="0" scrolling="no"
                                src="https://www.youtube.com/embed/lmLocrrLDPY"></iframe></p>
    
                        <div>
                            <a href="#" id="btnCancelMore">Thu lại</a>
                        </div>
                    </div>
                </div>
                <div class="set-calendar-ball">
                    <div class="refine">
                        <select class="form-control">
                            <option>Đặt sân tháng</option>
                        </select>
                    </div>
                    <div class="select ">
                        <div class=" row row-s" style="text-align: center"> 
                            <h3>{{$tr->name}}</h3>
                            <h5 >sân : {{$ph->name}}</h5>
                        </div>
                       
                    </div>
                </div>
                <div class="show-calendar">
                    <div class="calendar-month text-center over">
                        <h3>Lịch đặt sân tháng</h3>
                        <h4>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                            <span id="Year">2019</span>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </h4>
                        <ul class="nav nav-pills current-month">
                            <li class="">
                                <a href="#" class="" rel="01/2019" data-month="01" data-year="2019">
                                    tháng <span>01</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="02/2019" data-month="02" data-year="2019">
                                    tháng <span>02</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="03/2019" data-month="03" data-year="2019">
                                    tháng <span>03</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="04/2019" data-month="04" data-year="2019">
                                    tháng <span>04</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="05/2019" data-month="05" data-year="2019">
                                    tháng <span>05</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="06/2019" data-month="06" data-year="2019">
                                    tháng <span>06</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="07/2019" data-month="07" data-year="2019">
                                    tháng <span>07</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="08/2019" data-month="08" data-year="2019">
                                    tháng <span>08</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="09/2019" data-month="09" data-year="2019">
                                    tháng <span>09</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="10/2019" data-month="10" data-year="2019">
                                    tháng <span>10</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="" rel="11/2019" data-month="11" data-year="2019">
                                    tháng <span>11</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#" class="delay" rel="12/2019" data-month="12" data-year="2019">
                                    tháng <span>12</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-pills diplay-none next-month">
                            <li>
                                <a href="#" class="delay" rel="01/2020" data-month="01" data-year="2020">
                                    tháng <span>01</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="02/2020" data-month="02" data-year="2020">
                                    tháng <span>02</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="03/2020" data-month="03" data-year="2020">
                                    tháng <span>03</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="04/2020" data-month="04" data-year="2020">
                                    tháng <span>04</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="05/2020" data-month="05" data-year="2020">
                                    tháng <span>05</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="06/2020" data-month="06" data-year="2020">
                                    tháng <span>06</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="07/2020" data-month="07" data-year="2020">
                                    tháng <span>07</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="08/2020" data-month="08" data-year="2020">
                                    tháng <span>08</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="09/2020" data-month="09" data-year="2020">
                                    tháng <span>09</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="10/2020" data-month="10" data-year="2020">
                                    tháng <span>10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="11/2020" data-month="11" data-year="2020">
                                    tháng <span>11</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="delay" rel="12/2020" data-month="12" data-year="2020">
                                    tháng <span>12</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <script>
                        var curentYear = '2019';
                        var fieldId = '1';
                        ValidateYear(curentYear, '2019');
                        $(function () {
                            $(".fa-caret-right").click(function (e) {
                                e.preventDefault();
                                $(".current-month").hide();
                                $(".next-month").fadeIn();
                                $("#Year").text('2020');
                                ValidateYear(curentYear, '2020');
                            });
                            $(".fa-caret-left").click(function (e) {
                                e.preventDefault();
                                $(".next-month").hide();
                                $(".current-month").fadeIn();
                                $("#Year").text('2019');
                                ValidateYear(curentYear, '2019');
                            });
                        });
                        $(document).ready(function () {
                            var timeZone = $("#TimeZone").find("option:selected").val();
                            loadPitch('12', timeZone, '2019', fieldId, '');
                            loadMonth();
                            $('html, body').animate({ scrollTop: $('#item-positon').position().top }, 'slow');
                        });
                    </script>
                    <div class="time-calendar over">
                    
                        <div class="tab-content" style="margin: 0;color: #333;">
                            <div id="thang1" class="tab-pane fade in active">
                                <div class="show over">
                                    <table class="table" id="list-month-pitch">
    
                                    </table>
                                  
                                    <input type="hidden" id="kmSanView" value="0">
                                    <input type="hidden" id="kmSanType" value="0">
                                    <div style="padding:10px 12px 15px;">
                                        <div class="row row-s">
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
                                            <form  method="POST" action="dstruong/{{$quan}}/{{$truong}}/{{$ph->tenkhongdau}}"  enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                                                <div class="col-xs-12 col-sm-12 col-s">
                                                    <div class="title-carte over">

                                                        <h3>thông tin khách hàng</h3>
                                                        <div class="open-carte" style="background:white; display:block">
                                                            
                                                            <div class="row row-s">
    
                                                                <input type="hidden" name="paymentType" id="paymentType"
                                                                    value="" />
                                                                <input type="hidden" name="monthChooise" id="monthChooise"
                                                                    value="" />
                                                                <input type="hidden" name="fieldId" id="fieldId"
                                                                    value="1" />
                                                                <input type="hidden" name="groupFieldId" id="groupFieldId"
                                                                    value="1" />
                                                                <input type="hidden" name="timeZoneId" id="timeZoneId"
                                                                    value="" />
                                                                <input type="hidden" name="voucherCode" id="voucherCode"
                                                                    value="" />
                                                                    
                                                                <div class="col-xs-12  col-s">
                                                                    
                                                                    <div class="over">
                                                                         <div class="row row-s">
                                                                            <div class="col-xs-12 col-sm-4 col-s">
                                                                            
                                                                                <span>Chọn thời gian<sup>*</sup></span>
                                                                                
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-4 col-s">
                                                                                <input type="text" class="form-control date_choise " placeholder="Ngày" id="Time"
                                                                            name="Time"   onchange="myFunction(this , {{$ph}})"   autocomplete="off"/>
                                                                            <script type="text/javascript">
                                                                                var dateToday = new Date();
                                                                                $('.date_choise').datepicker({
                                                                                    'format': 'yyyy-m-d',
                                                                                    'autoclose': true,
                                                                                    'startDate': dateToday
                                                                                });
                                                                            </script>
                                                                                <script>
                                                                                        function myFunction(input , ph) {
                                                                                            $.ajax({
                                                                                                url: 'http://localhost/SanBongWeb/public/test',
                                                                                                type: 'GET',
                                                                                                data: {
                                                                                                    ngay: input.value,
                                                                                                    phong: ph,
                                                                                                }
                                                                                            }).done(function(ketqua) {
                                                                                                
                                                                                                console.log(ketqua)
                                                                                                var result = ''
                                                                                                $.each(ketqua, function (index, value) { 
                                                                                                    result+='<option value="'+index+'">'+value + '</option>'
                                                                                                });
                                                                                                $('#TimeZone').html(result);
                                                                                            
                                                                                            });
                                                                                            
                                                                                        }
                                                                                        
                                                                                </script>
                                                                            </div>



                                                                            
                                                                            <div class="col-xs-12 col-sm-4 col-s">
                                                                                <select id="TimeZone" name="TimeZone" class="form-control">
                                                                                
                                                                                    <option value="1">07:30 - 08:30 </option>
                                                                                    <option value="2">08:30 - 09:30</option>
                                                                                    <option value="3">09:30 - 10:30</option>
                                                                                    <option value="4">10:30 - 11:30</option>
                                                                                    <option value="5">13:00 - 14:00</option>
                                                                                    <option value="6">14:00 - 15:00</option>
                                                                                    <option value="7">15:00 - 16:00</option>
                                                                                    <option value="8">16:00 - 17:00</option>

                                                                                </select>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="over">
                                                                        <div class="row row-s">
                                                                            <div class="col-xs-12 col-sm-3 col-s">
                                                                                <span>Họ tên<sup>*</sup></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-9 col-s">
                                                                                <input type="text" class="form-control inp"
                                                                                    placeholder="Họ tên" id="FullName"
                                                                                name="FullName" 
                                                                                @if(Auth::check())
                                                                                    
                                                                                    value=" {{Auth::user()->chitiet->name}}" readonly
                                                                                
                                                                                @else
                                                                                    value=""
                                                                                @endif
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="over">
                                                                        <div class="row row-s">
                                                                            <div class="col-xs-12 col-sm-3 col-s">
                                                                                <span>Điện thoại<sup>*</sup></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-9 col-s">
                                                                                <input type="text" class="form-control inp"
                                                                                    placeholder="Số điện thoại" id="Phone"
                                                                                    name="Phone" 
                                                                                    @if(Auth::check())
                                                                                    
                                                                                    value=" {{Auth::user()->chitiet->phone}}" readonly
                                                                                
                                                                                    @else
                                                                                    value=""
                                                                                    @endif
                                                                                    />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="over">
                                                                        <div class="row row-s">
                                                                            <div class="col-xs-12 col-sm-3 col-s">
                                                                                <span>Địa chỉ<sup>*</sup></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-9 col-s">
                                                                                <input type="text" class="form-control inp"
                                                                                    placeholder="Địa chỉ" id="Address"
                                                                                    name="Address" 
                                                                                    @if(Auth::check())
                                                                                    
                                                                                    value=" {{Auth::user()->chitiet->address}}" readonly
                                                                                
                                                                                @else
                                                                                    value=""
                                                                                @endif
                                                                                    />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="over">
                                                                        <div class="row row-s">
                                                                            <div class="col-xs-12 col-sm-3 col-s">
                                                                                <span>Email<sup>*</sup></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-9 col-s">
                                                                                <input type="email" class="form-control inp"
                                                                                    placeholder="Email" id="email"
                                                                                    name="email" 
                                                                                    @if(Auth::check())
                                                                                    
                                                                                    value=" {{Auth::user()->email}}" readonly
                                                                                
                                                                                @else
                                                                                    value=""
                                                                                @endif
                                                                                    />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="over">
                                                                        <div class="row row-s">
                                                                            <div class="col-xs-12 col-sm-3 col-s">
                                                                                <span>Ghi chú</span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-9 col-s">
                                                                                <textarea id="Note" name="Note"
                                                                                    class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="col-xs-12 col-s">
                                                                        <div class="over">
                                                                            <span style="color: red">* bắt buộc</span>
                                                                            <p style="float: right;">
                                                                                <button
                                                                                    class="btn bg delay btnSubmit"
                                                                                    type="submit" >Đặt sân</button>
                                                                            </p>
                                                                        </div>
    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
    
                                            </form>
                                        </div>
                                        <div class="container" style="width: 100%">
                                            <div id="fb-root"></div>
                                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=2756561261078425&autoLogAppEvents=1"></script>
                                            <div class="fb-comments" data-href="{{url()->full()}}" data-width="100%" data-numposts="5"></div>
                                            {{-- <div class="fb-comments" data-href="{{url()->full()}}"
                                            data-numposts="5" data-width="100%"></div> --}}
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection