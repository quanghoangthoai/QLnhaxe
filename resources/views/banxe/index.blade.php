@extends('banxe.layout')

@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">thông tin xe bán </h2>
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
            <a class="btn btn-success " href="{{ route('banxe.create') }}"> nhập xe</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($banxes) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>Loại xe </th>
                <th>tên xe</th>
                <th>đời xe</th>
                <th>mẫu xe</th>
                <th>số khung</th>
                <th>số máy</th>
                <th>tình trạng</th>
                <th>giá bán</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($banxes as $banxe)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $banxe->thongtinxe->loaixe }}</td>
                    <td>{{ $banxe->thongtinxe->tenxe}}</td>
                    <td>{{ $banxe->thongtinxe->doixe}}</td>
                    <td>{{ $banxe->thongtinxe->mauxe}}</td>
                    <td>
                        @if($banxe->status==0)

                        @else
                            {{ $banxe->thongtinxe->sokhung }}
                            @endif
                    </td>
                    <td>{{ $banxe->thongtinxe->somay}}</td>

                    <td>{{ $banxe->giaban}}</td>

                    <td>
                        <form action="{{ route('banxe.destroy',$banxe->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('banxe.show',$banxe->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('banxe.edit',$banxe->id) }}">sửa</a>

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


    {!! $banxes->links() !!}
@endsection
