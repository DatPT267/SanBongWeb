<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data; //khai báo cái biến data
    public function __construct($data) //truyền cái biến vô đây
    {
        $this->data = $data;   
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    
    public function build()
    {
        return $this->subject('XÁC NHẬN ĐẶT PHÒNG THÀNH CÔNG')->view('admin.sendemail.dynamic_email_template'); 
        // đây là cái tiêu đề mail(TEST GỬI MAIL) còn cái view là 
       
        
        // nhập trong view dynamic đó
    }
}
