<h1 style="display: none">datsanbong.com.vn</h1>
<div class="set">
    <div class="slyder-home owl-carousel3">
        <div class="item3">
<style type="text/css">
    .owl-item .container .adc3 a{
        transition:all 450ms;
        background:#15A10D!important;
               border:2px solid #127f0a!important;
        }
    .owl-item .container .adc3 a:hover{
        background:#fff!important;
        color:#000!important;
        }
</style>
<div class="owl-item" style="width: 1349px;position:relative;">
    <img src="admin_asset1/css/Uploads/files/trang-chu/slider1.jpg" style=“width:1489px;height:523.283px;” alt="">
     <div class="container" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.3);">
                      <div class="adc3" style="float:right;width:25%; margin:100px 10% 0 0;">
                            <a href="http://localhost/phongthinghiem/public/dstruong/ngu-hanh-son" style="border-radius:20px;margin:27px 30px;padding:11px 25px;text-transform:uppercase;font-size:11px;font-weight:700;border:2px solid #444;background:#000;display:block;text-align:center;color:#fff">Đặt sân trực tuyến</a>
                            <a href="http://localhost/phongthinghiem/public/dstruong/ngu-hanh-son" style="border-radius:20px;margin:27px 30px;padding:11px 25px;text-transform:uppercase;font-size:11px;font-weight:700;border:2px solid #444;background:#000;display:block;text-align:center;color:#fff">Tìm sân</a>
                            <a href="http://localhost/phongthinghiem/public/tintuc" style="border-radius:20px;margin:27px 30px;padding:11px 25px;text-transform:uppercase;font-size:11px;font-weight:700;border:2px solid #444;background:#000;display:block;text-align:center;color:#fff">Tin tức nổi bật</a>
                      </div>
      </div> 
    </div>           
                
            </div>
            <div class="item3">
                    <img src="admin_asset1/css/Uploads/files/trang-chu/slider2.jpg" style=“width:1489px;height:523.283px;” alt="Slide trang chủ 3" title="Slide trang chủ 3">
                
            </div>
            <div class="item3">
                    <img src="admin_asset1/css/Uploads/files/trang-chu/slider3.jpg " alt="Slide trang chủ 2" style=“width:1489px;height:523.283px;” title="Slide trang chủ 2">
                
            </div>
    </div>
    
    
<div class="set-leng over">
    <div class="container">
        <div class="row row-s">
            <div class="col-xs-12 col-sm-3 col-s">
                <div class="land">
                    <ul class="ul">
                        <li>
                            <span>Đặt Sân</span>
                            <h3>Nhanh</h3>
                        </li>
                        <li>
                            Đà Nẵng
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-s">

                <form id="frmSearch" method="GET" action="/tim-kiem-nhanh">
                    <div class="row row-s">
                        <div class="col-xs-12 col-sm-2 col-s">
                            <select class="form-control" id="district_choice" name="district_choice">
                                <option value="">Quận/Huyện</option>
                                    <option value="1" >Hải Châu</option>
                                    <option value="2" >Cẩm Lệ</option>
                                    <option value="3" >Thanh Khê</option>
                                    <option value="4" >Liên Chiểu</option>
                                    <option value="5" >Ngũ Hành Sơn</option>
                                    <option value="6" >Sơn Trà</option>
                                    <option value="8" >Hòa Vang</option>
                                    <option value="14" >Hoàng Sa</option>
                                    
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-s">
                            <select class="form-control" id="field_choice" name="field_choice">
                                <option value="">Chọn Sân</option>
                                

                            </select>
                        </div>
                        
                        <div class="col-xs-12 col-sm-2 col-s voic">
                            <input type="text" class="form-control date_choise" placeholder="Ngày" id="date" name="date" />
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <script type="text/javascript">
                                    var dateToday = new Date();
                                    $('.date_choise').datepicker({
                                        'format': 'yyyy-m-d',
                                        'autoclose': true,
                                        'startDate': dateToday
                                    });
                            </script>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-s">
                            <select class="form-control" id="time_zone" name="time_zone">
                                <option value="0">Khung giờ</option>
                                    <option value="1" >07:00 - 08:30</option>
                                    <option value="2" >08:30 - 10:00</option>
                                    <option value="3" >10:00 - 11:30</option>
                                    <option value="5" >13:00 - 14:30</option>
                                    <option value="6" >14:30 - 16:00</option>
                                    <option value="7" >16:00 - 17:30</option>
                                    <option value="8" >17:30 - 19:00</option>
                                    <option value="9" >19:00 - 20:30</option>
                                    <option value="10" >20:30 - 22:00</option>
                                    <option value="11" >22:00 - 23:30</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-s">
                            <button type="button" class="btn btn-success" id="btnSearch">Tìm Sân</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>