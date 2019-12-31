@extends('banxi.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">BÁN SỈ</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('banxi.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banxi.store') }}" method="POST">
        @csrf

        <div class="row">
            <!-- div xuat noi bo-->
            <div class="col-sm-6">
                <label for="gianhap">Số HD</label>
                <input type="text" class="form-control"  name="soHD" >
                <label for="somay">Số máy</label>
                <select class="form-control" name="thongtinxe_id" id="somay">
                    @foreach($thongtinxes as $thongtinxe)
                        <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->somay }}</option>
                    @endforeach
                </select>
                <label for="sokhung">Số khung</label>
                <select class="form-control" name="thongtinxe_id" id="sokhung">
                    @foreach($thongtinxes as $thongtinxe)
                        <option

                            value="{{ $thongtinxe->id }}">{{ $thongtinxe->sokhung }}</option>
                    @endforeach
                </select>
                <label for="loaixe">Loại xe</label>
                <select class="form-control"  name="thongtinxe_id" id="loaixe">
                    @foreach($thongtinxes as $thongtinxe)
                        <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->loaixe }}</option>
                    @endforeach
                </select>
                <label for="mauxe">Màu xe</label>
                <select class="form-control" name="thongtinxe_id" id="mauxe">
                    @foreach($thongtinxes as $thongtinxe)
                        <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->mauxe }}</option>
                    @endforeach
                </select>
                <label for="doixe">Đời xe</label>
                <select class="form-control" name="thongtinxe_id" id="doixe">
                    @foreach($thongtinxes as $thongtinxe)
                        <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->doixe }}</option>
                    @endforeach
                </select>

            </div>
            <div class=" col-sm-6">
                <div class="form-group">

                    <label for="gianhap">Giá nhập</label>
                    <input type="text" class="form-control"  name="gianhap" >
                    <label for="khoxuat">Kho xuất</label>
                    <select class="form-control" name="kho_id" id="nameid">
                        @foreach($khos as $kho)
                            <option value="{{ $kho->id }}">{{ $kho->dia_diem }}</option>
                        @endforeach
                    </select>

                    <label for="giaban">Giá bán</label>
                    <input type="text" class="form-control"  name="giaban" >
                    <label for="noixuat">Nơi xuất</label>
                    <input type="text" class="form-control"  name="noixuat" >
                    <label for="ngayxuat">Ngày xuất</label>
                    <input type="date" class="form-control"  name="ngayxuat" >
                </div>


            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>


    </form>
@endsection
@section('custom_js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/select2/select2.min.js') }}" defer></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#nameid').select2();
        });

    </script>

    <script >
        $(document).ready(function() {
            $('#sokhung').select2({
                ajax: {
                    url: '{{ route("sokhung.search") }}',
                    dataType: 'json',
                },
            });

            $("#sokhung").on('change',function () {
                var sokhung = $(this).val();
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: '{{ route("selectsokhung") }}',
                    type: 'POST',
                    data:{_token:token,sokhung:sokhung},
                    success: function (data) {
                        document.getElementById('tenxe').value = data.data.id;
                        document.getElementById('mauxe').value = data.data.id;
                        document.getElementById('somay').value = data.data.id;

                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });
            })
            $("#sdt").on('change',function () {
                var sdt = $(this).val();
                var token = $("input[name='_token']").val();
                $.ajax({
                    url: '{{ route("selectSdt") }}',
                    type: 'POST',
                    data:{_token:token,sdt:sdt},
                    success: function (data) {
                        document.getElementById('name').value = data.data.id;
                        document.getElementById('ngaysinh').value = data.data.id;
                        document.getElementById('phuong').value = data.data.id;
                        document.getElementById('thanhpho').value = data.data.id;
                        document.getElementById('tinh').value = data.data.id;

                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });
            })
        });
    </script>
@endsection
