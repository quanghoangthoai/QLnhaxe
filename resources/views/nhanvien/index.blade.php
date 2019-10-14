@extends('nhanvien.layout')

@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">thông tin nhân viên </h2>
        </div>
        <div class="col-md-4" >
            <form action="/search" method="get" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="search" class="form-control" name="search"
                           placeholder="tìm nhân viên"> <span class="input-group-btn">
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
            <a class="btn btn-success " href="{{ route('nhanvien.create') }}"> thêm nhân viên</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($nhanviens) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>Họ và tên </th>
                <th>số điện thoại</th>

                <th width="280px">More</th>
            </tr>
            @foreach ($nhanviens as $nhanvien)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $nhanvien->name }}</td>
                    <td>{{ $nhanvien->sdt}}</td>

                    <td>
                        <form action="{{ route('nhanvien.destroy',$nhanvien->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('nhanvien.show',$nhanvien->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('nhanvien.edit',$nhanvien->id) }}">sửa</a>

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


    {!! $nhanviens->links() !!}
@endsection
