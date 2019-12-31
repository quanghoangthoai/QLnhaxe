<?php

namespace App\Http\Controllers;


use App\banxe;
use App\khachhang;
use App\kho;
use App\banxi;
use App\thongtinxe;
use App\xuatnoibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class banxicontroller extends Controller
{
    public function index()
    {
        $banxis = banxi::latest()->paginate(10);
        return view('banxi.index',compact('banxis','thongtinxes'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function search (Request $request){
        $search =$request->get('search');
        $nhapxes=DB::table('nhapxe')->where('thongtinxe_id','like','%'.$search.'%')->paginate(5);
        return view('nhapxe.index',compact('nhapxes'))->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function xuathdbanxi(){
        $khos=kho::all();
        $thongtinxes=thongtinxe::all();
        return view('banxi.hdbanxi',compact('thongtinxes','khos'));
    }
    public function create()
    {
      $khos = kho::all();
      $thongtinxes=thongtinxe::all();
        return view('banxi.create',compact('khos','thongtinxes'));
    }
    public function searchsokhung(Request $request)
    {
        $cities = thongtinxe::where('sokhung', 'LIKE', '%'.$request->input('term', '').'%')
            ->get(['id', 'sdt as text']);
        return ['results' => $cities];
    }
    public function selectsokhung(Request $request)
    {
        $data=DB::table('thongtinxe')->find($request['sokhung']);
        return response()->json(['data'=>$data]);
    }

    public function store(Request $request)
    {

            $request->validate([
                'soHD' => 'required',
                'gianhap' => 'required',
                'noixuat' => 'required',
                'ngayxuat' => 'required',
                'kho_id' => 'required',
                'thongtinxe_id' => 'required',
            ]);
        banxi::create($request->all());

        return redirect()->route('banxi.hdbanxi')->with('success','thêm thành công .');
    }
    public function show(banxi $banxi)
    {
        return view('banxi.show',compact('banxi'));
    }
    public function edit(banxi $banxi)
    {
        $khos = kho::all();
        $thongtinxes=thongtinxe::all();
        return view('banxi.edit',compact('banxi','khos','thongtinxes'));
    }
    public function update(Request $request, banxi $banxi)
    {
        $request->validate([
            'nhacc' => 'required',
            'gianhap' => 'required',
            'giaban' => 'required',
            'noixuat' => 'required',
            'ngayxuat' => 'required',
            'kho_id' => 'required',
            'thongtinxe_id' => 'required',
        ]);
        $banxi->update($request->all());
        return redirect()->route('banxi.index')->with('success','sửa thành công.');
    }
    public function destroy(banxi $banxi)
    {
        $banxi->delete();
        return redirect()->route('banxi.index')->with('success','xóa thành công.');
    }
    public function changeStatus2(Request $request)
    {
        $banxi= banxi::find($request->id);
        $banxi->status = $request->status;
        $banxi->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
