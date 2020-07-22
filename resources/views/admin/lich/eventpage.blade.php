<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đặt Phòng Online</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
{{-- 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    
    
</head>
<body style="">
	<div class="jumbotron">
	<div class="container">
		<h2>Quản Lý Lịch Phòng Học Dành Cho Quản Trị Viên</h2>
		<div class="row">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                Add Event
              </button>
			
			<a href="../display/{{$id}}" class="btn btn-primary">Edit Events</a>
  

            <!-- The Modal -->
            <div class="modal" id="myModal" style="margin-top: 13%">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #2e6da4 ; color: white;">
                                    Đặt Lịch Phòng {{$phongtn->name}}
                                    
                                    
                                </div>
                                <div class="panel-body">
                                <form  method="POST" action="../addevent/{{$id}}"  enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                                     
                                        <div class="col-xs-12 col-sm-12 col-s">
                                            <div class="title-carte over">
            
                                                <h3>Thông Tin Khách Hàng</h3>
                                                <div class="open-carte" style="background:white; display:block">
                                                    
                                                    <div class="row row-s"
                                                            
                                                        <div class="col-xs-12  col-s">
                                                            
                                                            <div class="over">
                                                                 <div class="row row-s">
                                                                    <div class="col-xs-12 col-sm-4 col-s">
                                                                    
                                                                        <span>Chọn thời gian<sup>*</sup></span>
                                                                        
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-4 col-s">
                                                                        <input type="date" class="form-control date_choise " placeholder="Ngày" id="Time"
                                                                    name="Time"   onchange="myFunction(this)"  />
                                                                    <script type="text/javascript">
                                                                        var dateToday = new Date();
                                                                        $('.date_choise').datepicker({
                                                                            'format': 'yyyy-m-d',
                                                                            'autoclose': true,
                                                                            'startDate': dateToday
                                                                        });
                                                                    </script>
                                                                        <script>
                                                                                function myFunction(input) {
                                                                                    $.ajax({
                                                                                        url: 'http://localhost/phongthinghiem_testing/public/test',
                                                                                        type: 'GET',
                                                                                        data: {
                                                                                            ngay: input.value,
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
                                                                            placeholder="Email" id="Email"
                                                                            name="Email" 
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
                                                                            type="submit" >Đặt phòng</button>
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    </p>
                                                                </div>
            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
            
                                    </form>
                                    </form>
                                </div>
                                
            
                            </div>
                        </div>
                    </div>
                </div>
                    
                
            </div>
  
		
		<br>

		<div class="row">
			@if(count($errors) >0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			@if(\Session::has('success'))
				<div class="alert alert-success">
					<p>{{ \Session::get('success')}}</p>
				</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading" style="background: #2e6da4; color: white">
					Full Callendar Example
				</div>	

				<div class="panel-body">
					{!! $calendar->calendar() !!}
					{!! $calendar->script() !!}
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>