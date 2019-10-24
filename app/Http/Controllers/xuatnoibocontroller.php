<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\xuatnoiboExport;


use App\kho;
use App\xuatnoibo;
use App\thongtinxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
class xuatnoibocontroller extends Controller
{
    public function index()
    {
        $xuatnoibos = xuatnoibo::latest()->paginate(10);

        return view('xuatnoibo.index',compact('xuatnoibos'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function search (Request $request){
        $search =$request->get('search');
        $xuatnoibos=DB::table('xuatnoibo')->where('id','like','%'.$search.'%')->paginate(5);
        return view('xuatnoibo.index',compact('xuatnoibos'))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function export()
    {
        return Excel::download(new xuatnoiboExport(), 'xuatnoibo.xlsx');
    }
    public function create()
    {
        $thongtinxes=thongtinxe::all();
        $khos = kho::all();

        return view('xuatnoibo.create',compact('khos','thongtinxes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'tinhtrang' => 'required',
            'ngayxuat' => 'required',
            'thongtinxe_id' => 'required',
            'kho_id' => 'required',
        ]);
        xuatnoibo::create($request->all());
        return redirect()->route('xuatnoibo.index')->with('success','thêm thành công .');
    }
    public function show(xuatnoibo $xuatnoibo)
    {
        return view('xuatnoibo.show',compact('xuatnoibo'));
    }
    public function edit(xuatnoibo $xuatnoibo)
    {
        $thongtinxes=thongtinxe::all();
        $khos = kho::all();
        return view('xuatnoibo.edit',compact('xuatnoibo','khos','thongtinxes'));
    }
    public function update(Request $request, xuatnoibo $xuatnoibo)
    {
        $request->validate([
            'tinhtrang' => 'required',
            'ngayxuat' => 'required',
            'thongtinxe_id' => 'required',
            'kho_id' => 'required',
        ]);
        $xuatnoibo->update($request->all());
        return redirect()->route('xuatnoibo.index')->with('success','sửa thành công.');
    }
    public function destroy(xuatnoibo $xuatnoibo)
    {
        $xuatnoibo->delete();
        return redirect()->route('xuatnoibo.index')->with('success','xóa thành công.');
    }
}
