<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Slide;

use App\TinTuc;
use App\User;
use App\PhongTN;
use App\ChiTietUser;
use App\Truong;
use App\Event;

use App\Mail\SendMail;

class PagesController extends Controller
{
    public function __construct()
    {
    	
    	// $slide = Slide::all();
    	// $slide = Slide::orderBy('id' ,'DESC')->take(4)->get();
    	
    	// view()->share('slide' , $slide);
    	
    }

    public function trangchu()
    {   
		
		$truong = Truong::all();
    	return view('pages.trangchu' ,['truong' =>$truong] ); 
    }

    public function getTinTuc()
    {
		$tintuc = TinTuc::orderBy('id' , 'DESC')->take(5)->get();
		$tintucnoibat = TinTuc::orderBy('id' ,'DESC')->where('NoiBat' , 1)->take(5)->get();
		
		return view('pages.tintuc' , ['tintuc'=>$tintuc ,'tintucnoibat'=>$tintucnoibat]);
	}
	public function getTinTucChiTiet( $chitiet )
    {
		$tintuc = TinTuc::where('TieuDeKhongDau' , $chitiet)->first();
		$tintucnoibat = TinTuc::orderBy('id' ,'DESC')->where('NoiBat' , 1)->take(5)->get();
		$tintuckhac = TinTuc::orderBy('id' , 'DESC')->take(10)->get();
		return view('pages.tintucchitiet' , ['tintuc'=>$tintuc , 'tintucnoibat'=>$tintucnoibat ,'tintuckhac' =>$tintuckhac]);
	}
	public function getKhachHang()
    {
		$tintucnoibat = TinTuc::orderBy('id' ,'DESC')->where('NoiBat' , 1)->take(5)->get();
		return view('pages.khachhang' , ['tintucnoibat'=>$tintucnoibat]);
	}
	public function getTaiKhoan()
    {
		
		return view('pages.thongtintaikhoan' );
    }
	public function possChangePass(Request $request)
    {
		$user = User::where('id' , Auth::user()->id)->first();

		$user->password = bcrypt($request->passwordnews);
		$user->save();
		return redirect('thongtintaikhoan#modal-changepassmem')->with('thongbao' , 'Bạn đã đổi mật khẩu thành công');

	}	
	public function possChangeAcc(Request $request)
    {
		$ctuser = ChiTietUser::where('id' , Auth::user()->id)->first();
		$this->validate($request,
    		[
    			'name'=>'required|min:3',
				'address'=>'required',
				'phone'=>'required',
				'gender'=>'required',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên người dùng',
    			'name.min'=>'Tên người dùng phải có ít nhất 3 kí tự',
				'address.required'=>'Bạn chưa nhập địa chỉ',
				'phone.required'=>'Bạn chưa nhập số điện thoại',
				'gender.required'=>'Bạn chưa chọn giới tính',
    		]);
		$ctuser->name = $request->name;
		$ctuser->address = $request->address;
		$ctuser->phone = $request->phone;
		$ctuser->gender = $request->gender;
		$ctuser->save();
				
		return redirect()->back()->with('thongbao' , 'Bạn đã cập nhật tài khoản thành công');

    }	
    public function postDangNhap(Request $request)
    {	
		
    	$this->validate($request,
    		[
    			'email'=>'required',
    			'password'=>'required|min:3|max:32',
    		],
    		[
    			'email.required'=>'Bạn Chưa Nhập Email',
    			'password.required'=>'Bạn Chưa Nhập Password',
    			'password.min'=>'Password không được nhỏ hơn 3 kí tự',
    			'password.max'=>'Password không được lớn hơn 32 kí tự'
    		]);
    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    		return redirect('trangchu');
		}
		else return redirect()->back();

    }
    public function getDangXuat($value='')
    {
		Auth::logout();
		$arr = [
			"message" => 'Thành công',
			"status" => 1
		];
    	return $arr;
    }

    public function getNguoiDung()
    {	
    	$user = Auth::user();
    	return view('pages.nguoidung' ,['nguoidung'=>$user]);
    }
    public function postNguoiDung(Request $request)
    {
    	$this->validate($request,
    		[
    			'name'=>'required|min:3',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên người dùng',
    			'name.min'=>'Tên người dùng phải có ít nhất 3 kí tự',
    		]);
    	$user = Auth::user();
    	$user->name = $request->name;   
    	if ($request->changePassword == "on") {
    		$this->validate($request,
    		[
    			'password'=>'required|min:3|max:32',
    			'passwordAgain'=>'required|same:password',
    		],
    		[
    			'password.required'=>'Bạn chưa nhập password',
    			'password.min'=>'Mật khẩu phải có ít nhất 3 kí tự',
    			'password.max'=>'Mật khẩu chỉ được tối đa 32 kí tự',
    			'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
    			'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp'
    		]);
    		$user->password = bcrypt($request->password);
    	}
    	$user->save();
    	return redirect('nguoidung')->with('thongbao' , 'Sửa Thành Công');
    }

    public function postDangKy(Request $request)
    {	
    	$this->validate($request,
    		[	
				
    			'name'=>'required|min:3',
    			'email'=>'required|email|unique:users,email',
    			'password'=>'required|min:3|max:32',
    			'passwordAgain'=>'required|same:password',
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên người dùng',
    			'name.min'=>'Tên người dùng phải có ít nhất 3 kí tự',
    			'email.required'=>'Bạn chưa nhập email',
    			'email.email'=>'Bạn chưa nhập đúng định dạng email',
    			'email.unique'=>'Email đã tồn tại',
    			'password.required'=>'Bạn chưa nhập password',
    			'password.min'=>'Mật khẩu phải có ít nhất 3 kí tự',
    			'password.max'=>'Mật khẩu chỉ được tối đa 32 kí tự',
    			'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
    			'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp'
    		]);
	
		
		$user = new User;
		$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
		$user->quyen = 0;
		
		$ct = new ChiTietUser; 
        $ct->color=$request->color;
        $ct->name = $request->name;   
        $ct->gender = 1;
        $ct->address = "Đà Nẵng";
        $ct->phone = $request->sdt;
    
		$user->save();
		$ct->save();
		
		return [
			'stt' => 1,
		];
    	// return redirect('dangky')->with('thongbao' , 'Chúc Mừng Bạn Đã Đăng Ký Thành Công');
    	// return view('pages.dangky');
    }

    public function getDSTruong($quan)
    {	
		$dc = ""; 
		if($quan == "hai-chau")
		{
			$dc = "Hải Châu";
		}
		if($quan == "cam-le")
		{
			$dc = "Cẩm Lệ";
		}
		if($quan == "thanh-khe")
		{
			$dc = "Thanh Khê";
		}
		if($quan == "lien-chieu")
		{
			$dc = "Liên Chiểu";
		}
		if($quan == "ngu-hanh-son")
		{
			$dc = "Ngũ Hành Sơn";
		}
		if($quan == "ngu-hanh-son")
		{
			$dc = "Ngũ Hành Sơn";
		}
		if($quan == "son-tra")
		{
			$dc = "Sơn Trà";
		}
		if($quan == "hoa-vang")
		{
			$dc = "Hòa Vang";
		}
		if($quan == "hoang-sa")
		{
			$dc = "Hoàng Sa";
		}
			
		$tr = Truong::where('quan' , $dc)->get();
	
		return view('pages.dstruong' , ['tr'=> $tr ,'quan'=>$quan] );
		
		
	}
	
    function getDSPhong($quan , $truong)
    {	
		$tr = Truong::where('namekhongdau' , $truong)->get()->first();
		$count = PhongTN::where('id_truong' , $tr->id)->count();
		return view('pages.dsphong' ,['tr'=>$tr ,'quan'=>$quan , 'truong'=>$truong , 'count'=>$count]);
	}
	public function getPhong($quan , $truong, $phong)
	{	
		$tr = Truong::where('namekhongdau' , $truong)->get()->first();
		$count = PhongTN::where('id_truong' , $tr->id)->count();


		$ph = PhongTN::where('tenkhongdau' ,$phong)->get()->first();
		return view('pages.phong' ,['tr'=>$tr ,'quan'=>$quan , 'truong'=>$truong , 'count'=>$count ,'ph'=>$ph]);
	}
	public function postPhong(Request $request ,$quan , $truong ,$phong)
	{	
	
		$this->validate($request,
		[
            'Time' =>'required',
			'TimeZone'=>'required',
			'FullName' =>'required',
			'Phone'=>'required',
			'Address' =>'required',
            'email'=>'required',
		],
		[
			'Time.required' =>'Bạn chưa chọn ngày tháng năm',
			'TimeZone.required' =>'Bạn chưa chọn thời gian đặt phòng', 
			'FullName.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ',
			'Phone.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ', 
			'Address.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ',
			'email.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ',
		]);
		
		$ctuser = ChiTietUser::all()->where('id' , Auth::user()->id)->first() ;

		$ph = PhongTN::where('tenkhongdau' , $phong)->get()->first();
	
	
		
		$events = new Event;		
		$events->id_user=  Auth::user()->id;
		$events->color= $ctuser->color;
        $events->id_phongtn= $ph->id;
        $events->ngay = $request->Time;
        $events->tiet=$request->TimeZone;
		$events->save();
		return $events;

		$tr = Truong::where('namekhongdau' , $truong)->get()->first();
		$count = PhongTN::where('id_truong' , $tr->id)->count();
	
	
		$this->validate($request, ['email'=>'required|email',]); 
		$data = (object) [
            'address'=>$request->Address, 
        ];
		
		Mail::to($request->input('email'))->send(new SendMail($data));
		return redirect()->back()->with('thongbao' , 'Bạn đã đặt phòng thành công');

	}
	public function test(Request $request)
	{	
		$event = Event::where('ngay' , $request->input('ngay'))->where('id_phongtn' , $request->input('phong')['id'])->get();
		
		$t[1] = '07:30 - 08:30' ;
		$t[2] = '08:30 - 09:30';
		$t[3] = '09:30 - 10:30' ;
		$t[4] = '10:30 - 11:30';
		$t[5] = '13:00 - 14:00' ;
		$t[6] = '14:00 - 15:00';
		$t[7] = '15:00 - 16:00' ;
		$t[8] = '16:00 - 17:00';
		
	
		
		$arr = [];
		$so =1;
		for( $i=1 ; $i<9;$i++){
			foreach($event as $e){	
				if( $i == $e->tiet){
				$so =0;	
				break;
				}
				else{
				$so= $i;
				}
				
			}
			if($so != 0){
			
				$arr[$i] = $t[$i];
			}
			
		
		}
		return $arr;
	}

}

