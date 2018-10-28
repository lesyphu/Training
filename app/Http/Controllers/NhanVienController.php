<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
class NhanVienController extends Controller
{
    // action để thực hiện việc thêm mới nhân vi
    public function create(){
        return view ('nhanvien.create');//tra ve view
    }
    
    // action để lưu nhan viên mới khi form submit
    public function store(Request $request) // request la nhung the input ma nguoi dung nhap vo sau do nhan submit
    {
        // toa chinh code lai chut code theo cau truc giong v r nop
        $nhanvien = new nhanvien(); //khoi tao nhanvien
        $nhanvien->ten = $request->ten;//Luu ten nguoi dung nhap vo bang nhan vien ngay cot ten ($nhanvien->ten)
        $nhanvien->email = $request->email;
        $nhanvien->gender = $request->gioitinh;
        //doi ten name cua the select thi ben day cung se doi~ theo
        //request->gender = <select name=gender> -> lay value cua the <option>
        $nhanvien->save(); //save vo db
        //hieu chua ok
        return redirect()->route('nhanvien.create');//chuyen huong den trang co' route name: nhanvien.create
//hieu chua ok hieeu hon roi
//nho cai luong di la dc
// gio muon hiien danh sach thi lam sao 
//luong di khi thuc hien 1 page chỉ để xem không thao tác (không có form) la : 
    //1. tạo route
   
    //3. bên view nhận tham số r hiển thị ra
    //hieu chua
    // thong nao~ :)) ek chi t lai cach put len git di 
    //commit -> publish la dc
    //may lam xong chua doi push
    // dang hoi ti commit

    }
    public function list(){

         //2. truyền tham số từ controller qua view 
        $danhsachnhanvien = nhanvien::all(); // nhanvien::all() = vao bang nhanvien select tat ca nhan vien 

        return view('nhanvien.list',compact('danhsachnhanvien')); //tu day moi tao view
        //lenh compact('tenbien'); la truyen bien danhsachnhanvien qua view nhanvien.list
        // sau khi compact xong qua view nhanvien.list goi. lai. bien danhsachnhanvien
    }
    
}
