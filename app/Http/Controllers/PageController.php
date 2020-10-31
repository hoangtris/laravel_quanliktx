<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use App\Phong;
use App\LoaiPhong;
use App\KhuVuc;
use App\DanhGia;
use App\TaiKhoan;

class PageController extends Controller
{
    //
    public function index()
    {
    	# code...
    	$sliders = Slider::all();
    	return view('pages.trangchu',compact('sliders'));
    }

    public function phong()
    {
    	# code...
        $loaiphong = LoaiPhong::all();
        $khuvuc = KhuVuc::all();
    	$phong = Phong::paginate(12);
    	return view('pages.phong',compact('phong','khuvuc','loaiphong'));
    }

    public function phongtheoloaiphong($lp)
    {
        # code...
        $loaiphong = LoaiPhong::all();
        $khuvuc = KhuVuc::all();
        $phong = Phong::where('ID_LoaiPhong',$lp)->paginate(12);
        return view('pages.phong',compact('phong','khuvuc','loaiphong'));
    }

    public function phongtheokhuvuc($kv)
    {
        # code...
        $loaiphong = LoaiPhong::all();
        $khuvuc = KhuVuc::all();
        $phong = Phong::where('ID_KhuVuc',$kv)->paginate(12);
        return view('pages.phong',compact('phong','khuvuc','loaiphong'));
    }

    public function phongtheomucgia($mg)
    {
        # code...
        switch ($mg) {
            case '<1tr':
                # code...
                $loaiphong = LoaiPhong::all();
                $khuvuc = KhuVuc::all();
                $phong = Phong::where('Gia','<','1000000')->paginate(12);
                return view('pages.phong',compact('phong','khuvuc','loaiphong'));
                break;
            case '1-2tr':
                # code...
                $loaiphong = LoaiPhong::all();
                $khuvuc = KhuVuc::all();
                $phong = Phong::whereBetween('Gia',[1000000,2000000])->paginate(12);
                return view('pages.phong',compact('phong','khuvuc','loaiphong'));
                break;
            case '2-3tr':
                # code...
                $loaiphong = LoaiPhong::all();
                $khuvuc = KhuVuc::all();
                $phong = Phong::whereBetween('Gia',[2000000,3000000])->paginate(12);
                return view('pages.phong',compact('phong','khuvuc','loaiphong'));
                break;
            case '3-4tr':
                # code...
                $loaiphong = LoaiPhong::all();
                $khuvuc = KhuVuc::all();
                $phong = Phong::whereBetween('Gia',[3000000,4000000])->paginate(12);
                return view('pages.phong',compact('phong','khuvuc','loaiphong'));
                break;
            
            default:
                # code...
                $loaiphong = LoaiPhong::all();
                $khuvuc = KhuVuc::all();
                $phong = Phong::where('Gia','>','4000000')->paginate(12);
                return view('pages.phong',compact('phong','khuvuc','loaiphong'));
                break;
        }
    }

    public function phongtheotimkiem(Request $request)
    {
        # code...
        $loaiphong = LoaiPhong::all();
        $khuvuc = KhuVuc::all();
        $phong = Phong::where('Gia','like','%'.$request->tukhoa.'%')
                        ->orWhere('MoTaNgan','like','%'.$request->tukhoa.'%')
                        ->orWhere('MoTaDai','like','%'.$request->tukhoa.'%')
                        ->orWhere('AnNinh','like','%'.$request->tukhoa.'%')
                        ->orWhere('TienNghi','like','%'.$request->tukhoa.'%')
                        ->orWhere('GhiChu','like','%'.$request->tukhoa.'%')
                        ->paginate(12);
        return view('pages.phong',compact('phong','khuvuc','loaiphong')); 
    }

    public function xemphong($id){
        $loaiphong = LoaiPhong::all();
        $khuvuc = KhuVuc::all();
        $phong = Phong::where('ID_Phong',$id)->first();
        $danhgia = DanhGia::where('ID_Phong',$id)->get();
        $taikhoan = TaiKhoan::all();
        //dd($phong);
        return view('pages.chitietphong', compact('loaiphong','khuvuc','phong','danhgia','taikhoan'));
    }

    public function dangki()
    {
        # code...
        return view('pages.dangki');
    }

    public function postdangki(Request $request)
    {
        # code...
        $taikhoan = new TaiKhoan;

        $taikhoan->ID_PhanQuyen = 1;
        $taikhoan->HoTen = $request->hoten;
        $taikhoan->GioiTinh = $request->gioitinh;
        $taikhoan->NgaySinh = $request->ngaysinh;
        $taikhoan->MatKhau = $request->matkhau;
        $taikhoan->SDT = $request->sdt;
        $taikhoan->CMND = $request->cmnd;
        $taikhoan->NgayCap = $request->ngaycap;
        $taikhoan->NoiCap = $request->noicap;
        $taikhoan->Email = $request->email;
        $taikhoan->Username = $request->username;
        $taikhoan->DiaChi = $request->diachi;

        dd($taikhoan);
                
    }

    public function dangnhap()
    {
        # code...
        return view('pages.dangnhap');
    }
}
