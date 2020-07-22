<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Truong;



use Illuminate\Http\Request;

class TruongController extends Controller
{
    public function getDanhSach()
    {	
    	$truong = Truong::all();
   
    	return view('admin.truong.danhsach' ,['truong' =>$truong ]);
    }
    public function getThem()
    {   
       
    	return view('admin.truong.them');
    }
    public function postThem(Request $request)
    {
    	
        $this->validate($request,
            [
              
                'ten' =>'required|unique:Truong,name',
                'image' => 'required',
                'quan' =>'required',
                'chitiet' =>'required',
            ],
            [
                'ten.unique' => 'Tên cơ sở đã tồn tại',
                'ten.required' =>'Bạn chưa nhập tên phòng thí nghiệm',
                'quan.required' =>'Bạn chưa chọn quận huyện',
                'chitiet.required' =>'Bạn nhập tên đường - số nhà',
                'image.required'=>'Bạn chưa upload ảnh đại diện cơ sở'
            ]);


        $truong = new Truong;
        $truong->name = $request->ten;
        if ($request->hasFile('image')) 
        {   

            $file =$request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
                return redirect('admin/truong/them')->with('thongbao' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
            }
            $name = $file->getClientOriginalName();
            $Hinh= Str::random(4)."_".$name;
            while (file_exists("upload/truong".$Hinh)) 
            {
                $Hinh= Str::random(4)."_".$name;
            }
            $file->move("upload/truong",$Hinh);
            $truong->image = $Hinh;
        }   
        else
        {   
            $truong->image="";
        }   
        $truong->quan = $request->quan;
        $truong->chitiet=$request->chitiet;
        $truong->namekhongdau = changeTitle($request->ten);
       
      
        $truong->save();
        return redirect('admin/truong/them/')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {	
        $truong = Truong::find($id);
    	return view('admin.truong.sua',['truong'=>$truong]);
    }
    public function postSua(Request $request , $id)
    {
    	$truong = Truong::find($id);
        $this->validate($request,
            [
              
                'ten' =>'required',
               
                'quan' =>'required',
                'chitiet' =>'required',
            ],
            [
                'ten.unique' => 'Tên cơ sở đã tồn tại',
                'ten.required' =>'Bạn chưa nhập tên phòng thí nghiệm',
                'quan.required' =>'Bạn chưa chọn quận huyện',
                'chitiet.required' =>'Bạn nhập tên đường - số nhà',
              
            ]);


  
            $truong->name = $request->ten;
            if ($request->hasFile('image')) 
            {   
    
                $file =$request->file('image');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg') {
                    return redirect('admin/truong/sua/'.$truong->id)->with('thongbao' ,'Bạn chỉ chọn được file có đuôi  jpg, png, jpeg ');
                }
                $name = $file->getClientOriginalName();
                $Hinh= Str::random(4)."_".$name;
                while (file_exists("upload/truong".$Hinh)) 
                {
                    $Hinh= Str::random(4)."_".$name;
                }
                $file->move("upload/truong",$Hinh);
                unlink("upload/truong/".$truong->image);
                $truong->image = $Hinh;
            }   
              
            $truong->quan = $request->quan;
            $truong->chitiet=$request->chitiet;
            $truong->namekhongdau = changeTitle($request->ten);
           
          
            $truong->save();

           
        $truong->save();
        return redirect('admin/truong/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
    	
        $truong = Truong::find($id);
        $truong->delete();

        return redirect('admin/phong/danhsach')->with('thongbao','Xóa thành công');
    }

}
