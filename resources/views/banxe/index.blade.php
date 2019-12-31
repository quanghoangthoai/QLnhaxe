@extends('banxe.layout')

@section('content')
    <a href="{{ url('/home') }}">trang chủ</a>
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center"> </h2>
        </div>

        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('banxe.create') }}"> Nhập xe</a>
            <a class="btn btn-success " href="{{ route('report') }}"> Báo cáo</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($banxes) > 0)
        <table class="table table-bordered data-table" >
            <thead class="bg-light" >
            <tr>
                <th>STT</th>
                <th>Loại xe </th>
                <th>Tên xe</th>
                <th>Mẫu xe</th>
                <th>Số khung</th>
                <th>Số máy</th>
                <th>Tình trạng</th>
                <th>Giá bán</th>
                <th width="280px">More</th>
            </tr>
            </thead>
            @foreach ($banxes as $banxe)
                <tbody>
                <tr >
                    <td>{{ ++$i }}</td>
                    <td>{{ $banxe->thongtinxe->loaixe }}</td>
                    <td>{{ $banxe->thongtinxe->tenxe}}</td>
                    <td>{{ $banxe->thongtinxe->mauxe}}</td>
                    <td>{{ $banxe->thongtinxe->sokhung }} </td>
                    <td>{{ $banxe->thongtinxe->somay}}</td>
                    <td>{{$banxe->tinhtrang}}</td>
                    <td>{{ $banxe->giaban}}</td>
                    <td>
                        @can('admin')
                        <form action="{{ route('banxe.destroy',$banxe->id) }}" method="POST">
                            <a href="{{ route('banxe.show',$banxe->id) }}"  class="btn btn-default"><i class="fa fa-print"></i> IN </a>
                            <a class="btn btn-primary" href="{{ route('banxe.edit',$banxe->id) }}">SỬA</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">XÓA</button>
                        </form>
                        @endcan
                    </td>

                </tr>

                </tbody>

            @endforeach
            <tfoot>
            <tr>
                <td colspan="7">Sum</td>
                <td colspan="2">$180</td>
            </tr>
            </tfoot>
        </table>

    @else

    @endif


    {!! $banxes->links() !!}
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
                    targets: [7],
                    searchable: false,
                    orderable: false,
                    visible: true
                }]
            });
        });
    </script>
    <script>
        function printContent(el){
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
@endsection
