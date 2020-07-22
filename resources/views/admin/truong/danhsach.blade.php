 @extends('admin.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cơ Sở
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
                                <th>Tên Cơ Sở</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Quận</th>
                                <th>Đường-Số nhà</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                         <tbody>
                            @foreach($truong as $tr)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$tr->id}}</td>
                                    <td>{{$tr->name}}</td>
                                    <td>
                                        <img width="100px" src="upload/truong/{{$tr->image}}" alt="">
                                    </td>
                                    <td>{{$tr->quan}}</td>
                                    <td>{{$tr->chitiet}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/truong/xoa/{{$tr->id}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/truong/sua/{{$tr->id}}">Edit</a></td>
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