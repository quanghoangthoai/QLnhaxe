@extends('banxi.layout')

@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> BÁN SỈ </h2>
        </div>


    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-success " href="{{ route('banxi.create') }}"> Thêm </a>
        <a class="btn btn-success " href="{{ route('hdbanxi') }}"> Xuất hóa đơn</a>

    </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($banxis) > 0)
        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th> số HD </th>
                <th>số máy </th>
                <th>số khung</th>
                <th>loại xe</th>
                <th>màu xe</th>
                <th>giá nhập</th>

                <th width="280px">More</th>
            </tr>
            </thead>
            @foreach ($banxis as $banxi)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $banxi->thongtinxe->somay }}</td>
                    <td>
                            {{ $banxi->thongtinxe->sokhung}}
                       </td>
                    <td>{{ $banxi->thongtinxe->loaixe}}</td>
                    <td>{{ $banxi->thongtinxe->mauxe}}</td>
                    <td>{{ $banxi->gianhap}}</td>

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
@section('custom_js')
    <script src="{{ asset('assets/admin/js/plugins/tables/datatables/datatables.min.js') }}"></script>



    <script>
        $(document).ready( function () {
            if (!$().DataTable) {
                console.warn('Warning - datatables.min.js is not loaded.');
                return;
            }

            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                language: {
                    sInfo:"Hiển thị _START_ đến _END_ của _TOTAL_ bản ghi",
                    search: '<span>Tìm kiếm:</span> _INPUT_',
                    searchPlaceholder: 'Nhập tìm kiếm...',
                    lengthMenu: '<span>Hiển thị:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                }
            });
            $('.data-table').DataTable({
                columnDefs: [{
                    targets: [6],
                    searchable: false,
                    orderable: false,
                    visible: true
                }]
            });

            } );

    </script>

    <script >

    </script>
@endsection
