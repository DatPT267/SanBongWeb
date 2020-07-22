<?php

namespace App\Http\Controllers;
use App\DatPhong;
use App\PhongTN;
use App\ChiTietUser;
use App\LoaiPhong;
use App\Truong;
use Illuminate\Http\Request;

class DatPhongController extends Controller
{
    public function getDanhSach()
    {	
    	$phongtn = PhongTN::all();
        $loaiphong = LoaiPhong::all();
        $truong = Truong::all();
    	return view('admin.datphong.danhsach' ,['phongtn' =>$phongtn ,'loaiphong'=>$loaiphong ,'truong'=>$truong]);
    }
    public function postDanhSach(Request $request)
    {	
     
        $loaiphong = LoaiPhong::all();
        $truong = Truong::all();

        $phongtn = PhongTN::all()->where('id_truong' ,$request->truong)->where('id_loai' ,$request->loaiphong);
        
    	return view('admin.datphong.danhsach' ,['phongtn' =>$phongtn ,'loaiphong'=>$loaiphong ,'truong'=>$truong]);
    }


     public function getThem()
    {   
        $ct = ChiTietUser::all();
        $phongtn = PhongTN::all();
    	return view('admin.datphong.them' ,['ct'=>$ct , 'phongtn'=>$phongtn]);
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
