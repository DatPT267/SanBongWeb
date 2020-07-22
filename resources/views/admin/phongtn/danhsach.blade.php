 @extends('admin.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Sân
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên Phòng</th>
                                <th>Loại phòng</th>
                                <th>Trường</th>
                                <th>Thiết Bị</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($phongtn as $tn)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$tn->id}}</td>
                                    <td>{{$tn->name}}
                                        <p>
                                            <img  width="100px"  src="upload/phong/{{$tn->image}}">
                                        </p>
                                    </td>
                                    <td>{{$tn->loaiphong->loai}}</td>
                                    <td>{{$tn->truong->name}}</td>
                                    <td>
                                        <a href="admin/thietbi/danhsach/{{$tn->id}}">
                                            <img width="50px" src="upload/thietbi/aoquan.jpg" alt="">
                                        </a>
                                    </td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/phong/xoa/{{$tn->id}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/phong/sua/{{$tn->id}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection