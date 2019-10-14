@extends('kho.layout')
@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">kho xe </h2>
        </div>
        <div class="col-md-4" >
            <form action="/search" method="get" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="search" class="form-control" name="search"
                           placeholder="tìm kho xe"> <span class="input-group-btn">
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
            <a class="btn btn-success " href="{{ route('kho.create') }}"> thêm kho xe</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($khos) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>địa điểm </th>
                <th>tên kho</th>

                <th width="280px">More</th>
            </tr>
            @foreach ($khos as $kho)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $kho->dia_diem }}</td>
                    <td>{{ $kho->name}}</td>

                    <td>
                        <form action="{{ route('kho.destroy',$kho->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('kho.show',$kho->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('kho.edit',$kho->id) }}">sửa</a>

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


    {!! $khos->links() !!}
@endsection
