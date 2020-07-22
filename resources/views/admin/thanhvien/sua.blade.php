@extends('admin.layout.index')
 @section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thành viên 
                            <small>{{$thanhvien->iduser}}</small>
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
                        <form action="admin/thanhvien/sua/{{$thanhvien->id}}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>ID Câu Lạc Bộ</label>
                                <input class="form-control" name="id_clb" placeholder="Nhập ID Câu Lạc Bộ"  value="{{$thanhvien->id_clb}}"/>
                            </div>
                            
                            <div class="form-group">
                                <label>ID User</label>
                                <input class="form-control" name="iduser" placeholder="Nhập ID User"  value="{{$thanhvien->iduser}}"/>
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