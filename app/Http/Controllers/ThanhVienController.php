<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThanhVien;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ThanhVienController extends Controller
{
    public function getDanhSach($id)
    {	
      
        $thanhvien = DB::table('thanhvien')->where('id_clb', $id)
            ->join('users', 'users.id', '=', 'thanhvien.id')
            ->get();
        // $thanhvien = DB::table('ThanhVien')->rightJoin('Users', 'ThanhVien.id', '=', 'ThanhVien.iduser')->get();
   
    	return view('admin.thanhvien.danhsach' ,['thanhvien' =>$thanhvien]);
    }
    public function getThem()
    {   
       
    	return view('admin.thanhvien.them');
    }
    public function postThem(Request $request)
    {
    	
        $this->validate($request,
            [
              
                'id_clb' =>'required',
                'iduser' => 'required',

            ]
        );
        
        $thanhvien = new ThanhVien;
        $thanhvien->id_clb = $request->id_clb;   
        $thanhvien->iduser=$request->iduser;
       
      
        $thanhvien->save();
        return redirect('admin/thanhvien/them/')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {	
        $thanhvien = ThanhVien::find($id);
    	return view('admin.thanhvien.sua',['thanhvien'=>$thanhvien]);
    }
    public function postSua(Request $request , $id)
    {
    	$thanhvien = ThanhVien::find($id);
        $this->validate($request,
        [
              
            'id_clb' =>'required',
            'iduser' => 'required',
        ]);


  
        $thanhvien->id_clb = $request->id_clb;
        $thanhvien->iduser=$request->iduser;
       
      
        $thanhvien->save();

    
        return redirect('admin/thanhvien/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	
        $thanhvien = ThanhVien::find($id);
        $thanhvien->delete();

        return redirect('admin/thanhvien/danhsach')->with('thongbao','Xóa thành công');
    }
}
