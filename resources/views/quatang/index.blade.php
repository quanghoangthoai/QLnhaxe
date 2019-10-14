@extends('quatang.layout')
@section('content')
    <a href="{{ url('/home') }}" class="nav-link">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">thông tin quà tặng </h2>
        </div>
        <div class="col-md-4" >
            <form action="/search" method="get" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="search" class="form-control" name="search"
                           placeholder="tìm quà tặng"> <span class="input-group-btn">
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
            <a class="btn btn-success " href="{{ route('quatang.create') }}"> thêm quà tặng</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($quatangs) > 0)
        <table class="table table-bordered">
            <tr>
                <th>stt</th>
                <th>tên quà tặng </th>


                <th width="280px">More</th>
            </tr>
            @foreach ($quatangs as $quatang)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $quatang->tenquatang }}</td>
                    <td>
                        <form action="{{ route('quatang.destroy',$quatang->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('quatang.show',$quatang->id) }}">xem</a>
                            <a class="btn btn-primary" href="{{ route('quatang.edit',$quatang->id) }}">sửa</a>

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


    {!! $quatangs->links() !!}
@endsection
