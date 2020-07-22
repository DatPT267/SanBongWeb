<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\ThietBi;

class ThietBiConTroller extends Controller
{
    
    public function getDanhSach($id)
    {	
    	$thietbi = ThietBi::where('id_phongtn' ,$id)->get();
    	return view('admin.thietbi.danhsach' ,['thietbi' =>$thietbi ,'id'=>$id]);
    }
    public function getThem($id)
    {   
        
    	return view('admin.thietbi.them' ,['id'=>$id]);
    }
    public function postThem(Request $request , $id)
    {
    	
    	$thietbi = new ThietBi;
        $this->validate($request,
            [
              
                'ten' =>'required',
               
                'soluong' =>'required',
                'image'=>'required'
            ],
            [
                'ten.required' =>'Bạn chưa nhập tên thiết bị',
                'soluong.required' =>'Bạn chưa nhập số lượng',
                'image.required'=>'Bạn chưa upload ảnh đại diện'
            ]);


  
            $thietbi->name = $request->ten;
            if ($request->hasFile('image')) 
            {   
    
                $file =$request->file('image');
                $duoi = $file->getClientOriginalExtension();

                if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
                    
                    return redirect("admin/thietbi/sua/".$thietbi->id)->with('thongbao' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
                }
                $name = $file->getClientOriginalName();
                $Hinh= Str::random(4)."_".$name;
                while (file_exists("upload/thietbi".$Hinh)) 
                {
                    $Hinh= Str::random(4)."_".$name;
                }
                $file->move("upload/thietbi",$Hinh);
                $thietbi->image = $Hinh;
            }   
              
            $thietbi->soluong=$request->soluong;
            $thietbi->id_phongtn=$id;
            $thietbi->save();
        return redirect('admin/thietbi/them/'.$id)->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {	
        $thietbi = ThietBi::find($id);
    	return view('admin.thietbi.sua',['thietbi'=>$thietbi]);
    }
    public function postSua(Request $request , $id)
    {
    	$thietbi = ThietBi::find($id);
        $this->validate($request,
            [
              
                'ten' =>'required',
               
                'soluong' =>'required',
            ],
            [
                'ten.required' =>'Bạn chưa nhập tên thiết bị',
                'soluong.required' =>'Bạn chưa nhập số lượng',
              
            ]);


  
            $thietbi->name = $request->ten;
            if ($request->hasFile('image')) 
            {   
    
                $file =$request->file('image');
                $duoi = $file->getClientOriginalExtension();

                if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
                    
                    return redirect("admin/thietbi/sua/".$thietbi->id)->with('thongbao' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
                }
                $name = $file->getClientOriginalName();
                $Hinh= Str::random(4)."_".$name;
                while (file_exists("upload/thietbi".$Hinh)) 
                {
                    $Hinh= Str::random(4)."_".$name;
                }
                $file->move("upload/thietbi",$Hinh);
                unlink("upload/thietbi/".$thietbi->image);
                $thietbi->image = $Hinh;
            }   
              
            $thietbi->soluong = $request->soluong;
          
           
           
          
            $thietbi->save();

           
       
        return redirect('admin/thietbi/sua/'.$thietbi->id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	
        $thietbi = thietbi::find($id);
        $thietbi->delete();

        return redirect('admin/thietbi/danhsach/'.$thietbi->id_phongtn)->with('thongbao','Xóa thành công');
    }
}
