@extends('khachhang.layout')

@section('content')

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
            <a class="btn btn-success " href="{{ route('khachhang.create') }}"> thêm khách hàng</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($khachhangs) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>Họ và tên </th>
                <th>ngày sinh</th>
                <th>số điện thoại</th>
                <th>địa chỉ</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($khachhangs as $khachhang)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $khachhang->Hovaten }}</td>
                    <td>{{ $khachhang->ngaysinh}}</td>
                    <td>{{ $khachhang->sdt}}</td>
                    <td>{{ $khachhang->diachi}}</td>
                    <td>
                        <form action="{{ route('khachhang.destroy',$khachhang->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('khachhang.show',$khachhang->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('khachhang.edit',$khachhang->id) }}">sửa</a>

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


    {!! $khachhangs->links() !!}
@endsection
