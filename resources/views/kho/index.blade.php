@extends('kho.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kho.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Địa điểm</th>
            <th>Tên</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kho as $kho)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $kho->dia_diem }}</td>
                <td>{{ $kho->name }}</td>
                <td>
                    <form action="{{ route('kho.destroy',$kho->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('kho.show',$kho->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('kho.edit',$kho->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $kho->links() !!}
@endsection
