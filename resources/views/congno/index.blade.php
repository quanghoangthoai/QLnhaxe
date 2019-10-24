@extends('congno.layout')
@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">thông tin khách hàng </h2>
        </div>
        <div class="col-md-4" >
            <form action="/search" method="get" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="search" class="form-control" name="search"
                           placeholder="tìm khách hàng"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                tìm kiếm
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                </div>
            </form>
            </div>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('conngno.create') }}"> thêm khách hàng</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @if(sizeof($nhapxes) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>tên khách hàng </th>
                <th>ngày mua </th>
                <th>giá bán </th>
                <th>trả trước </th>
                <th>trả lần 1 </th>
                <th>còn lại </th>
                <th>tiền trả </th>
                <th>tên xe </th>
                <th>số khung </th>
                <th>số máy </th>
                <th>ngày trả </th>
                <th width="280px">More</th>
            </tr>
            @foreach ($congnos as $congno)
                <tr>
                    <td>{{ ++$i }}</td>
                    td>{{ $congno->khachhang->Hovaten}}</td>
                    <td>{{ $congno->ngaymua}}</td>
                    td>{{ $congno->giaban}}</td>
                    <td>{{ $congno->tratruoc}}</td>
                    <td>{{ $congno->tralan1}}</td>
                    <td>{{ $congno->conlai}}</td>
                    <td>{{ $congno->tientra }}</td>
                    <td>{{ $congno->thongtinxe->tenxe}}</td>
                    <td>{{ $congno->thongtinxe->sokhung}}</td>
                    <td>{{ $congno->thongtinxe->somay}}</td>
                    <td>{{ $congno->ngaytra}}</td>
                        <form action="{{ route('$congno.destroy',$congno->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('congno.show',$congno->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('congno.edit',$congno->id) }}">sửa</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
    @endif
    {!! $congnos->links() !!}
@endsection