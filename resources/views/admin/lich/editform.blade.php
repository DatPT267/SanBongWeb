{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<title>Đặt sân</title>
</head>
<body> --}}

@extends('admin.layout.index')
@section('content')
	
	<div style="padding: auto ; margin: auto">
			<form action="{{ route('postAdd', ['id' => $id]) }}" method="POST" >
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				
				<div class="container">
					<div class="jumbotron" style="margin-left: 5%;">
						<h3>Chỉnh sửa đặt lịch</h3>
						<hr>
						<div class="form-group">
							<label for="">Khách Hàng</label>
							<input type="text" class="form-control" name="title" placeholder="Enter Name" value="{{$events->user->name}}" disabled>
						</div>
						<div class="form-group">
							<label for="">Ngày đặt phòng</label>
							<input type="date" class="form-control"  placeholder="Ngày" id="Time"
							name="Time"   onchange="myFunction(this)"   autocomplete="off"value="{{ $events->ngay }}"> 
						</div>
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
						<div class="form-group">
							<label for="">Khung giờ đặt </label>
							<select id="TimeZone" name="TimeZone" class="form-control" >
                                                                                
								<option 
								@if($events->tiet == 1 )
								{{"selected"}}
								@endif
								value="1"
								>07:30 - 08:30 </option>
								<option 
								@if($events->tiet == 2 )
								{{"selected"}}
								@endif
								value="2">08:30 - 09:30</option>
								<option 
								@if($events->tiet == 3 )
								{{"selected"}}
								@endif
								value="3">09:30 - 10:30</option>
								<option 
								@if($events->tiet == 4 )
								{{"selected"}}
								@endif
								value="4">10:30 - 11:30</option>
								<option 
								@if($events->tiet == 5 )
								{{"selected"}}
								@endif
								value="5">13:00 - 14:00</option>
								<option 
								@if($events->tiet == 6 )
								{{"selected"}}
								@endif
								value="6">14:00 - 15:00</option>
								<option 
								@if($events->tiet == 7 )
								{{"selected"}}
								@endif
								value="7">15:00 - 16:00</option>
								<option 
								@if($events->tiet == 8 )
								{{"selected"}}
								@endif
								value="8">16:00 - 17:00</option>

							</select>
						</div>
						
						<button type="submit" name="submit" class="btn btn-success">Chỉnh sửa</button>
						<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   
					</div>
				</div>
			</form>
		</div>
	
@endsection
{{-- </body>
</html> --}}