@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sân Bóng
                            <small>Thêm</small>
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

                        <form action="admin/phong/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                            <div class="form-group">
                                <label>Tên Sân</label>
                                <input class="form-control" name="ten" placeholder="Nhập Tên Sân" />
                            </div>
                            <div class="form-group">
                                <label>Loại Sân</label>
                                <select class="form-control" id="district_choice" name="loaiphong">
                                    @foreach($loaiphong as $lp)
                                        <option value="{{$lp->id}}">{{$lp->loai}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trường</label>
                                <select class="form-control" id="district_choice" name="truong">
                                    @foreach($truong as $tr)
                                        <option value="{{$tr->id}}">{{$tr->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh Đại Diện</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Sân</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection