  @extends('admin.layout.index')
 @section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cơ sở
                            <small>{{$truong->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        <form action="admin/truong/sua/{{$truong->id}}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                    <label>Tên Cơ Sở</label>
                                    <input class="form-control" name="ten" placeholder="Nhập Tên Cơ Sở"  value="{{$truong->name}}"/>
                                </div>
                                <div class="form-group">
                                    <label>Địa Chỉ</label>
                                    <select class="form-control" id="district_choice" name="quan">
                                        <option value="Hải Châu" 
                                            @if($truong->quan == "Hải Châu")
                                            {{"selected"}}
                                            @endif
                                        >Hải Châu</option>
                                        <option value="Cẩm Lệ"
                                            @if($truong->quan == "Cẩm Lệ")
                                            {{"selected"}}
                                            @endif
                                        >Cẩm Lệ</option>
                                        <option value="Thanh Khê" 
                                            @if($truong->quan == "Thanh Khê")
                                            {{"selected"}}
                                            @endif
                                        >Thanh Khê</option>
                                        <option value="Liên Chiểu"
                                            @if($truong->quan == "Liên Chiểu")
                                            {{"selected"}}
                                            @endif
                                        >Liên Chiểu</option>
                                        <option value="Ngũ Hành Sơn"
                                            @if($truong->quan == "Ngũ Hành Sơn")
                                            {{"selected"}}
                                            @endif
                                        >Ngũ Hành Sơn</option>
                                        <option value="Sơn Trà"
                                            @if($truong->quan == "Sơn Trà")
                                            {{"selected"}}
                                            @endif
                                        >Sơn Trà</option>
                                        <option value="Hòa Vang" 
                                            @if($truong->quan == "Hòa Vang")
                                            {{"selected"}}
                                            @endif
                                        >Hòa Vang</option>
                                        <option value="Hoàng Sa" 
                                            @if($truong->quan == "Hải Châu")
                                            {{"selected"}}
                                            @endif
                                        >Hoàng Sa</option> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Đường - Số nhà</label>
                                    <input class="form-control" name="chitiet" placeholder="Nhập tên đường - số nhà"  value="{{$truong->chitiet}}"/>
                                </div>
                                <div class="form-group">
                                        <label>Ảnh Đại Diện</label>
                                        <p>
                                            <img src="upload/truong/{{$truong->image}}" alt="">
                                        </p>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection