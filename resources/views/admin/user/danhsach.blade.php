 @extends('admin.layout.index')
 @section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Giới Tính</th>
                                <th>SĐT</th>
                                <th>Địa Chỉ</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $u)
                            <tr class="odd gradeX" align="center">

                                <td>{{$u->id}}</td>
                                <td>{{$u->chitiet->name}}</td>
                                <td>{{$u->email}}</td>
                                <td>
                                    @if($u->quyen == 1)
                                    {{"Admin"}}
                                    @else 
                                    {{"Thường"}}
                                    @endif
                                </td>
                                <td>
                                    @if($u->chitiet->gender == 1)
                                    {{"Nam"}}
                                    @else 
                                    {{"Nữ"}}
                                    @endif
                                </td>
                                 <td>{{$u->chitiet->phone}}</td>
                                  <td>{{$u->chitiet->address}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$u->id}}">Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$u->id}}">Edit</a></td> 
                            </tr>
                           
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection