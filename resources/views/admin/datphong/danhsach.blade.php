 @extends('admin.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
                  
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Đặt Sân
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <div class="jumbotron">
                            <div class="container">
                               <form action="admin/datphong/danhsach" method="POST"> 
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="col-sm-4">
                                        <label>Cơ Sở</label>
                                        <select class="form-control" id="district_choice" name="truong">
                                            @foreach($truong as $tr)
                                                <option value="{{$tr->id}}" 
                                                    >{{$tr->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Loại Sân</label>
                                        <select class="form-control" id="district_choice" name="loaiphong">
                                            @foreach($loaiphong as $lp)
                                                <option value="{{$lp->id}}" 
                                                    >{{$lp->loai}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        
                                        <br>
                                        <button type="submit" class="btn btn-success">Tìm Kiếm</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                     
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
                        <thead>
                            <tr align="center">
                                <th>Tên Sân</th>
                                <th>Quận/Huyện</th>
                                <th>Địa Chỉ</th>
                                <th>Lịch Đặt</th>
                            </tr>
                        </thead>
                         <tbody>
                            @foreach($phongtn as $tn)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$tn->name}}</td>
                                    <td>{{$tn->truong->quan}}</td>
                                    <td>{{$tn->truong->chitiet}}</td>
                                    <td style="width: 10%">
                                    <a href="admin/lich/events/{{$tn->id}}" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-edit"></i>Xem
                                        </a>
                                    </td>
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