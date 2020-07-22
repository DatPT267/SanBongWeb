<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\CauLacBo;

class CauLacBoController extends Controller
{
    public function getDanhSach()
    {	
    	$caulacbo = CauLacBo::all();
   
    	return view('admin.caulacbo.danhsach' ,['caulacbo' =>$caulacbo ]);
    }
    public function getThem()
    {   
       
    	return view('admin.caulacbo.them');
    }
    public function postThem(Request $request)
    {
    	
        $this->validate($request,
            [
              
                'name' =>'required|unique:CauLacBo,name',
                'image' => 'required',
                'mota' =>'required',
            ],
            [
                'name.unique' => 'Tên câu lạc bộ đã tồn tại',
                'name.required' =>'Bạn chưa nhập tên câu lạc bộ',
                'mota.required' =>'Bạn chưa nhập mô tả',
                'image.required'=>'Bạn chưa upload ảnh đại diện câu lạc bộ'
            ]);


        $caulacbo = new CauLacBo;
        $caulacbo->name = $request->name;
        if ($request->hasFile('image')) 
        {   

            $file =$request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
                return redirect('admin/caulacbo/them')->with('thongbao' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
            }
            $name = $file->getClientOriginalName();
            $Hinh= Str::random(4)."_".$name;
            while (file_exists("upload/caulacbo".$Hinh)) 
            {
                $Hinh= Str::random(4)."_".$name;
            }
            $file->move("upload/caulacbo",$Hinh);
            $caulacbo->image = $Hinh;
        }   
        else
        {   
            $caulacbo->image="";
        }   
        
        $caulacbo->mota=$request->mota;
       
      
        $caulacbo->save();
        return redirect('admin/caulacbo/them/')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {	
        $caulacbo = CauLacBo::find($id);
    	return view('admin.caulacbo.sua',['caulacbo'=>$caulacbo]);
    }
    public function postSua(Request $request , $id)
    {
    	$caulacbo = CauLacBo::find($id);
        $this->validate($request,
        [
              
            'name' =>'required|unique:CauLacBo,name',
            'image' => 'required',
            'mota' =>'required',
        ],
        [
            'name.unique' => 'Tên câu lạc bộ đã tồn tại',
            'name.required' =>'Bạn chưa nhập tên câu lạc bộ',
            'mota.required' =>'Bạn chưa nhập mô tả',
            'image.required'=>'Bạn chưa upload ảnh đại diện câu lạc bộ'
        ]);


  
            $caulacbo->name = $request->name;
            if ($request->hasFile('image')) 
            {   
    
                $file =$request->file('image');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
                    return redirect('admin/caulacbo/sua/'.$caulacbo->id)->with('thongbao' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
                }
                $name = $file->getClientOriginalName();
                $Hinh= Str::random(4)."_".$name;
                while (file_exists("upload/caulacbo".$Hinh)) 
                {
                    $Hinh= Str::random(4)."_".$name;
                }
                $file->move("upload/caulacbo",$Hinh);
                unlink("upload/caulacbo/".$caulacbo->image);
                $caulacbo->image = $Hinh;
            }   
              
            $$caulacbo->mota=$request->mota;
       
      
            $caulacbo->save();

    
        return redirect('admin/caulacbo/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	
        $caulacbo = CauLacBo::find($id);
        $caulacbo->delete();

        return redirect('admin/caulacbo/danhsach')->with('thongbao','Xóa thành công');
    }
}
