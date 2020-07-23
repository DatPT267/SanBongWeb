<?php

namespace App\Http\Controllers;

use App\Truong;
use App\PhongTN;
use App\TinTuc;
use App\Event;
use App\ThongBao;
use App\CauLacBo;
use App\ThanhVien;
use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function listSanBong(){
        // $truong = Truong::where('truong.quan', "Ngũ Hành Sơn")
        //                 ->join('phongtn', 'phongtn.id_truong', '=', 'truong.id')->get();
        
        // return $truong;
        $truong = Truong::where('quan', 'Ngũ Hành Sơn')->get();
        return $truong;
     
    }
    public function TinTucHot(){
        $tintuc = TinTuc::where('NoiBat',  1)->orderBy('id' ,'DESC')->take(6)->get();
        return $tintuc;
    }
    public function listCoSo($quan){
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
        $truong = Truong::where('quan', $dc)->get();
        return $truong;
	}
	
	 public function listSan($id)
	{
		$san = PhongTN::where('id_truong', $id)->get();
		return $san;
	}
	public function DatSan(Request $request)
	{	
		$this->validate($request,
		[	
			
            'Time' =>'required',
			'TimeZone'=>'required',
		],
		[
			'Time.required' =>'Bạn chưa chọn ngày tháng năm',
			'TimeZone.required' =>'Bạn chưa chọn thời gian đặt phòng', 
		]);
		$events = new Event;		
		$events->id_user=  $request->id_user;
		$events->color= $request->color;
        $events->id_phongtn = $request->id_san;
        $events->ngay = $request->Time;
        $events->tiet=$request->TimeZone;
		$events->save();
		return $events;
	}
	public function KhungGio(Request $request)
	{		
		$event = Event::where('ngay' , $request->input('ngay'))->where('id_phongtn' , $request->input('idSan'))->get();
		return $event;

		
	}
	public function ThongBao(Request $request)
	{
		$thongbao = new ThongBao;
		$thongbao->idUser = $request->idUser;
		$thongbao->noidung = $request->noidung;
		$dt = Carbon::now('Asia/Ho_Chi_Minh');
		
		$thongbao->thoigiantb = $dt->toDateTimeString()	;
		$thongbao->save();
		return $thongbao;
	}
	public function listThongBao($id)
	{
		$thongbao = ThongBao::Where('iduser', $id)->orderBy('id', 'DESC')->get();
		return $thongbao;
	}
	public function listCLB()
	{
		$clb = CauLacBo::all();
		return $clb;
	}
	public function listTV($id)
	{
		$user =  ThanhVien::Where('id_clb' , $id)->join('users', 'thanhvien.iduser', '=', 'users.id')
					->select('users.id', 'users.name', 'users.email' , 'users.email_verified_at')->get();

		return $user;
	}
	public function addTV(Request $request)
	{
		$tv = new ThanhVien;
		$tv->id_clb = $request->idclb;
		$tv->iduser = $request->iduser;
		$tv->save();
	
	
		return $tv;
	
	}
}
