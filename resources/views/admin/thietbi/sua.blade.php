  @extends('admin.layout.index')
 @section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cơ sở
                            <small>{{$thietbi->name}}</small>
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
                        <form action="admin/thietbi/sua/{{$thietbi->id}}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên Thiết Bị</label>
                                <input class="form-control" name="ten" placeholder="Nhập Tên Thiết Bị"  value="{{$thietbi->name}}"/>
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="soluong" placeholder="Nhập số lượng"  value="{{$thietbi->soluong}}"/>
                            </div>
                            <div class="form-group">
                                <label>Ảnh Đại Diện</label>
                                <p>
                                    <img src="upload/thietbi/{{$thietbi->image}}" alt="">
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