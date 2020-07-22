<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\PhongTN;
use App\LoaiPhong;
use App\Truong;

use App\TinTuc;
use App\Comment;

class PhongTNController extends Controller
{
    public function getDanhSach()
    {	
    	$phongtn = PhongTN::all();
   
    	return view('admin.phongtn.danhsach' ,['phongtn' =>$phongtn ]);
    }


     public function getThem()
    {   
        $loaiphong = LoaiPhong::all(); 
        $truong = Truong::all();
    	return view('admin.phongtn.them' ,['loaiphong' =>$loaiphong ,'truong'=>$truong]);
    }
    public function postThem(Request $request)
    {
    	
        $this->validate($request,
            [
              
                'ten' =>'required',
                'image'=>'required'
            ],
            [
                
                'ten.required' =>'Bạn chưa nhập tên phòng thí nghiệm',
                
              
                'image.required'=>'Bạn chưa upload ảnh đại diện phòng'
            ]);
        $phongtn = new PhongTN;
        $phongtn->name = $request->ten;
        $phongtn->tenkhongdau = changeTitle($request->ten);
        $phongtn->id_loai=$request->loaiphong;
        $phongtn->id_truong=$request->truong;
       
       if ($request->hasFile('image')) 
        {   

            $file =$request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
                return redirect('admin/phong/them')->with('loi' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
            }
            $name = $file->getClientOriginalName();
            $Hinh= Str::random(4)."_".$name;
            while (file_exists("upload/phong".$Hinh)) 
            {
                $Hinh= Str::random(4)."_".$name;
            }
            $file->move("upload/phong",$Hinh);
            $phongtn->image = $Hinh;
        }   
        else
        {   
            $phongtn->image="";
        }
        $phongtn->save();
        return redirect('admin/phong/them/')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {	
        $phongtn = PhongTN::find($id);
        $loaiphong = LoaiPhong::all(); 
        $truong = Truong::all();
    	return view('admin.phongtn.sua',['phongtn'=>$phongtn , 'loaiphong'=>$loaiphong ,'truong'=>$truong]);
    }
    public function postSua(Request $request , $id)
    {
    	$phongtn = PhongTN::find($id);
        $this->validate($request,
        [
          
            'ten' =>'required',
            
        ],
        [
            
            'ten.required' =>'Bạn chưa nhập tên phòng thí nghiệm',
            
          
          
        ]);
  
    $phongtn->name = $request->ten;
    $phongtn->tenkhongdau = changeTitle($request->ten);
    $phongtn->id_loai=$request->loaiphong;
    $phongtn->id_truong=$request->truong;
   
   if ($request->hasFile('image')) 
    {   

        $file =$request->file('image');
        $duoi = $file->getClientOriginalExtension();
        if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
            return redirect('admin/phong/sua/'.$phongtn->id)->with('thongbao' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
        }
        $name = $file->getClientOriginalName();
        $Hinh= Str::random(4)."_".$name;
        while (file_exists("upload/tintuc".$Hinh)) 
        {
            $Hinh= Str::random(4)."_".$name;
        }
        $file->move("upload/phong",$Hinh);
        unlink("upload/phong/".$phongtn->image);
        $phongtn->image = $Hinh;
    }   

           
        $phongtn->save();
        return redirect('admin/phong/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	
        $phongtn = PhongTN::find($id);
        $phongtn->delete();

        return redirect('admin/phong/danhsach')->with('thongbao','Xóa thành công');
    }
    
}
 