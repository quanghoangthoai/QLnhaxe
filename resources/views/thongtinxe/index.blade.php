@extends('thongtinxe.layout')
@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">thông tin xe </h2>
        </div>
        <div class="col-md-4" >
            <form action="/search" method="get" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="search" class="form-control" name="search"
                           placeholder="tìm số máy"> <span class="input-group-btn">
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
            <a class="btn btn-success " href="{{ route('thongtinxe.create') }}"> thêm  xe</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($thongtinxes) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>loại xe </th>
                <th>tên xe</th>
                <th>đời xe </th>
                <th>mẫu xe </th>
                <th>số khung </th>
                <th>số máy </th>
                <th width="280px">More</th>
            </tr>
            @foreach ($thongtinxes as $thongtinxe)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $thongtinxe->loaixe }}</td>
                    <td>{{ $thongtinxe->tenxe}}</td>
                    <td>{{ $thongtinxe->doixe}}</td>
                    <td>{{ $thongtinxe->mauxe}}</td>
                    <td>{{ $thongtinxe->sokhung}}</td>
                    <td>{{ $thongtinxe->somay}}</td>

                    <td>
                        <form action="{{ route('thongtinxe.destroy',$thongtinxe->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('thongtinxe.show',$thongtinxe->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('thongtinxe.edit',$thongtinxe->id) }}">sửa</a>

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


    {!! $thongtinxes->links() !!}
@endsection
