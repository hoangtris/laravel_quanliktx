<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{
    //
    public function cmnd(Request $request)
    {
        //echo "hi";
        if($request->get('query'))
        {
            $query = $request->get('query');
            //echo $query;
            if(strlen($query) == 9 || strlen($query) == 12){
            	$pattern = '/^[0-9]+$/'; # dáu ^ và $ dùng để so sánh giá trị tuyệt đối pattern
            	if(preg_match($pattern, $query)){
            		$data = DB::table('taikhoan')
			            ->where('CMND',$query)
			            ->get();
			        if(count($data) !=1){
						echo "<p class='text-success'>Hợp lý</p>";
					}else{
						echo "CMND này đã được sử dụng";
					}
            	}else{
            		echo "CMND chỉ chấp nhận chữ số";
            	}
            }else{
            	echo "CMND bao gồm 9 hoặc 12 chữ số";
            }
       	}
    }

    public function sdt(Request $request)
    {
        //echo "hi";
        if($request->get('query'))
        {
            $query = $request->get('query');
            //echo $query;
            $pattern = '/^[0-9]+$/'; # dáu ^ và $ dùng để so sánh giá trị tuyệt đối pattern
            if(preg_match($pattern, $query)){
            	if(strlen($query) == 9 || strlen($query) == 10){
            		$data = DB::table('taikhoan')
			            ->where('SDT',$query)
			            ->get();
			        if(count($data) !=1){
						echo "<label class='text-success'>Hợp lý</label>";
					}else{
						echo "SDT này đã được sử dụng";
					}
            	}else{
            		echo "SDT bao gồm 9 hoặc 10 chữ số";
            	}
            }else{
            	echo "SDT chỉ chấp nhận chữ số";
            }
       	}
    }

    public function email(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            //echo $query;
            $pattern = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]/"; #pattern của email
            if(preg_match($pattern, $query)){
            	
        		$data = DB::table('taikhoan')
		            ->where('Email',$query)
		            ->get();
		        if(count($data) !=1){
					echo "<label class='text-success'>Hợp lý</label>";
				}else{
					echo "Email này đã được sử dụng";
				}
            	
            }else{
            	echo "Email không hợp lệ";
            }
       	}
    }

    public function username(Request $request)
    {
        //echo "hi";
        if($request->get('query'))
        {
            $query = $request->get('query');
            //echo $query;
            	if(strlen($query) >= 6 || strlen($query) <= 32){
            		$data = DB::table('taikhoan')
			            ->where('Usernmae',$query)
			            ->get();
			        if(count($data) !=1){
						echo "<label class='text-success'>Hợp lý</label>";
					}else{
						echo "Username này đã được sử dụng";
					}
            	}else{
            		echo "Username có độ dài 6-32 kí tự";
            	}
        }
    }
}
