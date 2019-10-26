@extends('banxi.layout')

@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> bán sỉ </h2>
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
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <a class="btn btn-warning" href="{{ route('export') }}">xuất file</a>
        </form>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-success " href="{{ route('banxi.create') }}"> thêm </a>
    </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($banxis) > 0)
        <table class="table table-bordered">
            <tr>
                <th> số HD </th>
                <th>số máy </th>
                <th>số khung</th>
                <th>loại xe</th>
                <th>màu xe</th>
                <th>tình trạng</th>
                <th>gián bán</th>
                <th>giá nhập</th>
                <th>tình trạng</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($banxis as $banxi)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $banxi->thongtinxe->somay }}</td>
                    <td>{{ $banxi->thongtinxe->sokhung}}</td>
                    <td>{{ $banxi->thongtinxe->loaixe}}</td>
                    <td>{{ $banxi->thongtinxe->mauxe}}</td>
                    <td>{{ $banxi->tinhtrang }}</td>
                    <td>{{ $banxi->giaban}}</td>
                    <td>{{ $banxi->gianhap}}</td>
                    <td>{{ $banxi->tinhtrang }}</td>
                    <td>
                        <form action="{{ route('banxi.destroy',$banxi->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('banxi.show',$banxi->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('banxi.edit',$banxi->id) }}">sửa</a>
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


    {!! $banxis->links() !!}
@endsection
