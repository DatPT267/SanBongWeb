@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cơ Sở
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
                       
                        <form action="admin/truong/them" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên Cơ Sở</label>
                                <input class="form-control" name="ten" placeholder="Nhập Tên Cơ Sở" />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <select class="form-control" id="district_choice" name="quan">
                                    <option value="">Quận/Huyện</option>
                                    <option value="Hải Châu" >Hải Châu</option>
                                    <option value="Cẩm Lệ" >Cẩm Lệ</option>
                                    <option value="Thanh Khê" >Thanh Khê</option>
                                    <option value="Liên Chiểu" >Liên Chiểu</option>
                                    <option value="Ngũ Hành Sơn" >Ngũ Hành Sơn</option>
                                    <option value="Sơn Trà" >Sơn Trà</option>
                                    <option value="Hòa Vang" >Hòa Vang</option>
                                    <option value="Hoàng Sa" >Hoàng Sa</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Đường - Số nhà</label>
                                <input class="form-control" name="chitiet" placeholder="Nhập tên đường - số nhà" />
                            </div>
                            <div class="form-group">
                                    <label>Ảnh Đại Diện</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                           
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection