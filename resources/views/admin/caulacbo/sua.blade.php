@extends('admin.layout.index')
 @section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Câu Lạc Bộ
                            <small>{{$caulacbo->name}}</small>
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
                        <form action="admin/caulacbo/sua/{{$caulacbo->id}}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                    <label>Tên Câu Lạc Bộ</label>
                                    <input class="form-control" name="name" placeholder="Nhập Tên Câu Lạc Bộ"  value="{{$caulacbo->name}}"/>
                                </div>
                                
                                <div class="form-group">
                                    <label>Mô Tả</label>
                                    <input class="form-control" name="mota" placeholder="Mô Tả"  value="{{$caulacbo->mota}}"/>
                                </div>
                                <div class="form-group">
                                        <label>Ảnh Đại Diện</label>
                                        <p>
                                            <img src="upload/caulacbo/{{$caulacbo->image}}" alt="">
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