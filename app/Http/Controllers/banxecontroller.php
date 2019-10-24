<?php
namespace App\Http\Controllers;
use App\thongtinxe;
use App\kho;
use App\quatang;
use App\tragop;
use App\nhanvien;
use App\banxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class nhapxecontroller extends Controller
{
    public function index()
    {
        $nhapxes = banxe::latest()->paginate(10);
        return view('banxe.index',compact('banxes'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
    public function search (Request $request){
        $search =$request->get('search');
        $banxes=DB::table('banxe')->where('id','like','%'.$search.'%')->paginate(5);
        return view('banxe.index',compact('banxes'))->with('i', (request()->input('page', 1) - 1) * 5); 
    }
    public function create( )
    {
        $khos = kho::all();
        $nhanviens=nhanvien::all();
        $quatangs=quatang::all();
        $thongtinxes=thongtinxe::all();
        $tragops=tragop::all();
        return view('banxe.create',compact('khos','nhanviens','thongtinxes','quatangs','tragops'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'giaban' => 'required',
            'duatruoc' => 'required',
            'conlai' => 'required',
            'tinhtrang' => 'required',
            'Hovaten' => 'required',
            'ngaysinh' => 'required',
            'SDT' => 'required',
            'ngaymua' => 'required',
            'diachi' => 'required',
            'phuong' => 'required',
            'thanhpho' => 'required',
            'tinh' => 'required',
            'thongtinxe_id' => 'required',
            'kho_id' => 'required',
            'tragop_id' => 'required',
            'nhanvien_id' => 'required',
            'quatang_id' => 'required',
        ]);
        banxe::create($request->all());
        return redirect()->route('banxe.index')->with('success','thêm thành công .');
    }
    public function show(banxe $banxe)
    {
        return view('nhapxe.show',compact('nhapxe','khos','nhanviens','thongtinxes'));
    }
    public function edit(banxe $banxe)
    {
        $khos = kho::all();
        $nhanviens=nhanvien::all();
        $quatangs=quatang::all();
        $thongtinxes=thongtinxe::all();
        $tragops=tragop::all();
        return view('banxe.edit',compact('tragops','quatangs','nhanviens','thongtinxes','khos'));
    }
    public function update(Request $request, banxe $banxe)
    {
        $request->validate([
            'id' => 'required',
            'giaban' => 'required',
            'duatruoc' => 'required',
            'conlai' => 'required',
            'tinhtrang' => 'required',
            'Hovaten' => 'required',
            'ngaysinh' => 'required',
            'SDT' => 'required',
            'ngaymua' => 'required',
            'diachi' => 'required',
            'phuong' => 'required',
            'thanhpho' => 'required',
            'tinh' => 'required',
            'thongtinxe_id' => 'required',
            'kho_id' => 'required',
            'tragop_id' => 'required',
            'nhanvien_id' => 'required',
            'quatang_id' => 'required',
        ]);
        $banxe->update($request->all());
        return redirect()->route('banxe.index')->with('success','sửa thành công.');
    }
    public function destroy(banxe $banxe)
    {
        $banxe->delete();
        return redirect()->route('banxe.index')->with('success','xóa thành công.');
    }
}
