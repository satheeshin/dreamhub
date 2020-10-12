<?php
namespace App\Http\Traits;

use Alert;
use App\User;
use App\Otplist;

trait OtpTrait {

    public function activateuser()
    {
        $user_id=auth()->user()->id;
        $mobile=auth()->user()->mobile;  
        User::where('id',$user_id)->update(['otp_status'=> 1]);
        Otplist::where('mobile',$mobile)->delete();
        toast('User Account activated successfully !','success');
    }

    public function sendotp($otp,$msg)
    {
            $name=auth()->user()->name;
            $mobile=auth()->user()->mobile;
            $message="Dear $name , $otp is your  One Time Password (OTP).  Thank you, Dream Host  https://dreamhost.in/login ";
           // $msg->sendotp($mobile,$message,$otp);  
    }

    public function getattempt($request)
    {           
        if ($request->session()->has('otp_attempt')){
            if (session('otp_attempt') >= 5) {
                $mobile=auth()->user()->mobile;
                $otplist= Otplist::where('mobile',$mobile)->delete();
                $request->session()->forget('otp_attempt');
                Auth::logout();
                return redirect('/login');
            }
             session(['otp_attempt' => session('otp_attempt')+1]);
        }else {
             session(['otp_attempt' => 1]);
        }        
        Alert::warning('OTP Invaild', 'You Have Entered Invaild Otp !  Make sure You Have entered Correct six digit pin!');
        return 'enterotp?attempt='.session('otp_attempt');  
    }

}