<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Calendar;
use App\PhongTN;
use App\ChiTietUser;
use Illuminate\Support\Facades\Auth;    
class EventController extends Controller
{
    public function index($id)
    {
    	$events = Event::all()->where('id_phongtn' , $id);
        $event =[];
        
        foreach($events as $row){
           
            if($row->tiet == 1){
                $start = $row->ngay." 07:30:00";
                $end = $row->ngay." 08:30:00";
            }
            if($row->tiet == 2){
                $start = $row->ngay." 08:30:00";
                $end = $row->ngay." 09:30:00";
            }
            if($row->tiet == 3){
                $start = $row->ngay." 09:30:00";
                $end = $row->ngay." 10:30:00";
            }
            if($row->tiet == 4){
                $start = $row->ngay." 10:30:00";
                $end = $row->ngay." 11:30:00";
            }
            if($row->tiet == 5){
                $start = $row->ngay." 13:00:00";
                $end = $row->ngay." 14:00:00";
            }
            if($row->tiet == 6){
                $start = $row->ngay." 14:00:00";
                $end = $row->ngay." 15:00:00";
            }
            if($row->tiet == 7){
                $start = $row->ngay." 15:00:00";
                $end = $row->ngay." 16:00:00";
            }
            if($row->tiet == 8){
                $start = $row->ngay." 16:00:00";
                $end = $row->ngay." 17:00:00";
            }
            $event[] = Calendar::event(
                $row->user->name,
                false,
                new \DateTime($start),
                new \DateTime($end),
                $row->id,
                [
                    'color'=> $row->color,
                ]
            );
        
        }
        $phongtn = PhongTN::find($id);
        $calendar = \Calendar::addEvents($event);
        return view('admin.lich.eventpage',compact('events','calendar','id','phongtn'));
    }

    public function getAdd($id)
    {
        $phongtn = PhongTN::find($id);
       
    	 return view('admin.lich.addevent' , compact('id' ,'phongtn' ));
    }

    public function postAdd(Request $request , $id )
    {   

            // $this->validate($request,
            // [
            //     'Time' =>'required',
            // 	'TimeZone'=>'required',
            // 	'FullName' =>'required',
            // 	'Phone'=>'required',
            // 	'Address' =>'required',
            //     'Email'=>'required',
            // ],
            // [
            // 	'Time.required' =>'Bạn chưa chọn ngày tháng năm',
            // 	'TimeZone.required' =>'Bạn chưa chọn thời gian đặt phòng', 
            // 	'FullName.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ',
            // 	'Phone.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ', 
            // 	'Address.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ',
            // 	'Email.required' =>'Bạn chưa đăng nhập !! Xin mời bạn đăng nhập để tiếp tục đặt phòng ',
            // ]);
   
        $ctuser = ChiTietUser::all()->where('id' , Auth::user()->id)->first();
		
        
        $events = new Event;
        $events->id_user=  Auth::user()->id;
        $events->color= $ctuser->color;
        $events->id_phongtn= $id;
        $events->ngay = $request->Time;
        $events->tiet=$request->TimeZone;
		$events->save();
	
		return redirect()->back()->with('thongbao' , 'Bạn đã đặt phòng thành công');
    }

    public function display($id)
    {   
        
        $events = Event::all()->where('id_phongtn' , $id);
        $phong = PhongTN::all()->where('id' , $id)->first();
       
        return view('admin.lich.display', compact('id' ,'phong'))->with('events' ,$events);
    }

    public function getEdit($id )
    {
    	$events = Event::find($id);
        return view('admin.lich.editform' , compact('events' ,'id'));
    }
    public function postEdit(Request $request, $id)
    {
    	 $this->validate($request,[
            'Time'=>'required',
            'TimeZone'=>'required',
        ]);
        $events = Event::find($id);

      
      
        $events->ngay = $request->input('Time');
        $events->tiet = $request->input('TimeZone');
        $events->save();
        return redirect('admin/lich/edit/'.$id)->with('success' ,'Sửa lịch thành công');
    }

    public function getDelete( $id )
    {
    	$events = Event::find($id);
    	$events->delete();

    	 return redirect()->back()->with('success' ,'Event Delete');
    }
}
