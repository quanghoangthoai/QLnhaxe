@extends('nhapxe.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">nhập xe</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('nhapxe.index') }}"> Back</a>
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

    <form action="{{ route('nhapxe.store') }}" method="POST">
        @csrf

        <div class="row">

            <!-- div nhapxe-->
            <div class="row tab-wrapper" id="tab-nhapxe">
                <div class="col-6 col-sm-6">
                    <div class="form-group">
                        <label for="loaixe">Loại xe</label>
                        <select class="form-control" id="loaixe" name="thongtinxe_id">
                            @foreach($thongtinxe as $thongtinxe)
                                <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->loaixe }}</option>
                            @endforeach
                        </select>
                        <label for="tenxe">Tên xe</label>
                        <select class="form-control" id="tenxe" name="thongtinxe_id">
                            @foreach($thongtinxe as $thongtinxe)
                                <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->tenxe }}</option>
                            @endforeach
                        </select>
                        <label for="doixe">Đời xe</label>
                        @foreach($thongtinxe as $thongtinxe)
                            <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->doixe }}</option>
                        @endforeach
                        <label for="mauxe">Mẫu xe</label>
                        <select class="form-control" id="mauxe" name="thongtinxe_id">
                            @foreach($thongtinxe as $thongtinxe)
                                <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->mauxe }}</option>
                            @endforeach
                        </select>
                        <label for="mauxe">số khung</label>
                        <select class="form-control" id="mauxe"name="thongtinxe_id">
                            @foreach($thongtinxe as $thongtinxe)
                                <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->sokhung }}</option>
                            @endforeach
                        </select>
                        <label for="mauxe">số máy</label>
                        <select class="form-control" id="mauxe"name="thongtinxe_id">
                            @foreach($thongtinxe as $thongtinxe)
                                <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->somay }}</option>
                            @endforeach
                        </select>
                        <label for="nhacungcap">Nhà cung cấp</label>
                        <input type="text" class="form-control" id="nhacungcap" name="nhacc">
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="form-group" >
                        <label for="nhacungcap">Ngày nhận</label>
                        <input type="date" class="form-control" id="ngaynhan"name="ngaynhan" >
                        <label for="nguoinhan">Người nhận</label>
                        <select class="form-control" id="nguoinhan"name="nhanvien_id">
                            @foreach($nhanvien as $nhanvien)
                                <option value="{{ $nhanvien->id }}">{{ $nhanvien->name }}</option>
                            @endforeach
                        </select>
                        <label for="nguoi_tk">Người TK</label>
                        <select class="form-control" id="nguoi_tk"name="nhanvien_id">
                            @foreach($nhanvien as $nhanvien)
                                <option value="{{ $nhanvien->id }}">{{ $nhanvien->name }}</option>
                            @endforeach
                        </select>
                        <label for="khonhan">Kho nhận</label>
                        <select class="form-control" id="khonhan"name="kho_id">
                            @foreach($kho as $kho)
                                <option value="{{ $kho->id }}">{{ $kho->dia_diem }}</option>
                            @endforeach
                        </select>
                        <label for="somay">Mã HD</label>
                        <input type="text" class="form-control" id="ma_hd"name="mahd" placeholder="mã HD">
                        <label for="somay">Ngày HD</label>
                        <input type="date" class="form-control" id="ngay_hd"name="ngayhd" placeholder="ngày HD">
                        <label for="somay">Mã ID</label>
                        <input type="text" class="form-control" id="ma_id"name="maID" placeholder="Mã ID">
                        <label for="somay">Giá nhập</label>
                        <input type="text" class="form-control" id="gianhap"name="gianhap"placeholder="giá nhập" >
                    </div>
                </div>

            </div>
            <!-- end nhapxe-->


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">thêm</button>
                <button type="file" class="btn btn-primary btn-sm " >NHẬP TỪ FILE</button>

            </div>
        </div>

    </form>
@endsection
