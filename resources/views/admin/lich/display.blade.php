@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
       <div id="page-wrapper">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">Danh sách
                       <small>Đặt Lịch Phòng {{$phong->name}}</small>
                       </h1>
                   </div>
                   <!-- /.col-lg-12 -->
                   @if(session('thongbao'))
                       <div class="alert alert-success">
                           {{session('thongbao')}}
                       </div>
                   @endif
                   
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead class="thead">
                        <tr class="warning">
                            <th>ID</th>
                            <th>Khách hàng</th>
                            <th>Color</th>
                            <th>Ngày Đặt</th>
                            <th>Khung giờ đặt</th>
                            <th>Update / Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    
                <tbody>
                
                    @foreach($events as $event)
                    <tr>
                        <td>{{$event->id}}</td>
                        <td>{{$event->user->name}}</td>
                        <td>{{$event->color}}</td>
                        <td>{{$event->ngay}}</td>
                        <td>{{$event->tiet}}</td>
                        <th>
                            <a href="admin/lich/edit/{{$event->id}}" class="btn btn-success">
                                <i class="glyphicon glyphicon-edit"></i>Edit
                            </a>
                        </th>
                        <th>
                            <a href="admin/lich/delete/{{$event->id}}" class="btn btn-danger">
                                <i class="glyphicon glyphicon-edit"></i>Delete
                            </a>
                        </th>
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