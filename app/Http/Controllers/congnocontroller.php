<?php

namespace App\Http\Controllers;

use App\kho;
use App\nhanvien;
use App\nhapxe;
use App\thongtinxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class congnocontroller extends Controller
{
    public function index()
    {
        $nhapxes = nhapxe::latest()->paginate(10);

        return view('nhapxe.index',compact('nhapxes'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function search (Request $request){
        $search =$request->get('search');
        $nhapxes=DB::table('nhapxe')->where('thongtinxe_id','like','%'.$search.'%')->paginate(5);
        return view('nhapxe.index',compact('nhapxes'))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function create()
    {
        $kho = kho::all();
        $nhanvien=nhanvien::all();
        $thongtinxe=thongtinxe::all();
        return view('nhapxe.create',compact('nhanpxe','kho','nhanvien','thongtinxe'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nhacc' => 'required',
            'ngaynhan' => 'required',
            'mahd' => 'required',
            'ngayhd' => 'required',
            'maID' => 'required',
            'ngaysinh' => 'required',
            'gianhap' => 'required',
            'kho_id' => 'required',
            'nhanvien_id' => 'required',
            'thongtinxe_id' => 'required',
        ]);
        nhapxe::create($request->all());
        return redirect()->route('nhapxe.index')->with('success','thêm thành công .');
    }
    public function show(nhapxe $nhapxe)
    {
        return view('nhapxe.show',compact('nhapxe'));
    }
    public function edit(nhapxe $nhapxe)
    {
        $kho = kho::all();
        $nhanvien=nhanvien::all();
        $thongtinxe=thongtinxe::all();
        return view('nhapxe.edit',compact('nhanpxe','kho','nhanvien','thongtinxe'));
    }
    public function update(Request $request, nhapxe $nhapxe)
    {
        $request->validate([
            'nhacc' => 'required',
            'ngaynhan' => 'required',
            'mahd' => 'required',
            'ngayhd' => 'required',
            'maID' => 'required',
            'ngaysinh' => 'required',
            'gianhap' => 'required',
            'kho_id' => 'required',
            'nhanvien_id' => 'required',
            'thongtinxe_id' => 'required',
        ]);
        $nhapxe->update($request->all());
        return redirect()->route('nhapxe.index')->with('success','sửa thành công.');
    }
    public function destroy(nhapxe $nhapxe)
    {
        $nhapxe->delete();
        return redirect()->route('nhapxe.index')->with('success','xóa thành công.');
    }
}
