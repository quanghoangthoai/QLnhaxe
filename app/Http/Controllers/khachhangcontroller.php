<?php
namespace App\Http\Controllers;
use App\khachhang;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class khachhangcontroller extends Controller
{
    public function index()
    {
        $khachhangs = khachhang::latest()->paginate(5);

        return view('khachhang.index',compact('khachhangs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function search (Request $request){
        $search =$request->get('search');
        $khachhangs=DB::table('khachhang')->where('Hovaten','like','%'.$search.'%')->paginate(5);
        return view('khachhang.index',compact('khachhangs'))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function create()
    {
        return view('khachhang.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'hovaten' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
        ]);
        khachhang::create($request->all());
        return redirect()->route('khachhang.index')->with('success','thêm thành công .');
    }
    public function show(khachhang $khachhang)
    {
        return view('khachhang.show',compact('khachhang'));
    }
    public function edit(khachhang $khachhang)
    {
        return view('khachhang.edit',compact('khachhang'));
    }
    public function update(Request $request, khachhang $khachhang)
    {
        $request->validate([
            'hovaten' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
        ]);
        $khachhang->update($request->all());
        return redirect()->route('khachhang.index')->with('success','sửa thành công.');
    }
    public function destroy(khachhang $khachhang)
    {
        $khachhang->delete();
        return redirect()->route('khachhang.index')->with('success','xóa thành công.');
    }
}
