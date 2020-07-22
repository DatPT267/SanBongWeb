<?php

namespace App\Http\Controllers;
use App\LoaiPhong;
use Illuminate\Http\Request;

class LoaiPhongConTroller extends Controller
{
    public function getDanhSach()
    {	
    	$loaiphong = LoaiPhong::all();
   
    	return view('admin.loaiphong.danhsach' ,['loaiphong' =>$loaiphong ]);
    }


     public function getThem()
    {   
    
    	return view('admin.loaiphong.them');
    }
    public function postThem(Request $request)
    {
    	
        $this->validate($request,
            [
              
                'ten' =>'required',
                'chitiet'=>'required'
            ],
            [
                
                'ten.required' =>'Bạn chưa nhập chi tiết',
                
              
                'chitiet.required'=>'Bạn chưa nhập chi tiết'
            ]);
        $loaiphong = new LoaiPhong;
        $loaiphong->loai = $request->ten;
        $loaiphong->mota = $request->chitiet;
        $loaiphong->save();
        return redirect('admin/loaiphong/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {	
        $loaiphong = LoaiPhong::find($id); 
  
    	return view('admin.loaiphong.sua',['loaiphong'=>$loaiphong ]);
    }
    public function postSua(Request $request , $id)
    {
    	$loaiphong = LoaiPhong::find($id);
        $this->validate($request,
        [
          
            'ten' =>'required',
            'chitiet'=>'required'
        ],
        [
            
            'ten.required' =>'Bạn chưa nhập chi tiết',
            
          
            'chitiet.required'=>'Bạn chưa nhập chi tiết'
        ]);
   
    $loaiphong->loai = $request->ten;
    $loaiphong->mota = $request->chitiet;
    $loaiphong->save();

       
        return redirect('admin/loaiphong/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	
        $loaiphong = LoaiPhong::find($id);
        $loaiphong->delete();

        return redirect('admin/loaiphong/danhsach')->with('thongbao','Xóa thành công');
    }
    
}
