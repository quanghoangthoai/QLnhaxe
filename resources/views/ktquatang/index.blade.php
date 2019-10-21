@extends('ktquatang.layout')

@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">thông tin quà tặng </h2>
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
            <a class="btn btn-success " href="{{ route('ktquatang.create') }}"> thêm kết quả quà tặng</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($ktquatangs) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>tên khách hàng </th>
                <th>quà tặng</th>
                <th>ngày nhận</th>
                <th>số máy</th>
                <th>ngày sinh</th>

                <th width="280px">More</th>
            </tr>
            @foreach ($ktquatangs as $ktquatang)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $ktquatang->khachang->Hovaten }}</td>
                    <td>{{ $ktquatang->quatang->tenquatang}}</td>
                    <td>{{ $ktquatang->ngaynhan}}</td>
                    <td>{{ $ktquatang->thongtinxe->somay}}</td>
                    <td>{{ $ktquatang->khachang->ngaysinh }}</td>

                        <form action="{{ route('ktquatang.destroy',$nhapxe->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('ktquatang.show',$nhapxe->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('ktquatang.edit',$nhapxe->id) }}">sửa</a>

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


    {!! $ktquatangs->links() !!}
@endsection
