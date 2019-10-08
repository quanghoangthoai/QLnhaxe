@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row xe">
            <div class="col-sm-12 menu">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <div class="tab-xe">
                        <ul class="tab">
                            <li class="active">
                                <a href="#tab-nhapxe"><button type="button" class="btn btn-secondary btn-lg">NHẬP XE</button>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-banxe"><button type="button" class="btn btn-secondary btn-lg">BÁN XE</button>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-congto"><button type="button" class="btn btn-secondary btn-lg">CÔNG TƠ</button>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-tk_quatang"><button type="button" class="btn btn-secondary btn-lg">KT QUÀ TẶNG</button>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-xuat_noibo"><button type="button" class="btn btn-secondary btn-lg">XUẤT NỘI BỘ</button>
                                </a>
                            </li>

                            <li>
                                <a href="#tab-bansi"><button type="button" class="btn btn-secondary btn-lg">BÁN SỈ</button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-7 quanli">
                <!-- div nhapxe-->
                <div class="row tab-wrapper" id="tab-nhapxe">
                    <div class="col-6 col-sm-6">
                        <div class="form-group">
                            <label for="loaixe">Loại xe</label>
                            <select class="form-control" id="loaixe">

                            </select>
                            <label for="tenxe">Tên xe</label>
                            <select class="form-control" id="tenxe">

                            </select>
                            <label for="doixe">Đời xe</label>
                            <select class="form-control" id="doixe">

                            </select>
                            <label for="mauxe">Mẫu xe</label>
                            <select class="form-control" id="mauxe">

                            </select>
                            <label for="sokhung">Số Khung</label>
                            <input type="text" class="form-control" id="sokhung" >
                            <label for="somay">Số máy</label>
                            <input type="text" class="form-control" id="somay" >
                            <label for="nhacungcap">Nhà cung cấp</label>
                            <input type="text" class="form-control" id="nhacungcap" >
                        </div>
                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="form-group" >
                            <label for="nhacungcap">Ngày nhận</label>
                            <input type="date" class="form-control" id="ngaynhan" >
                            <label for="nguoinhan">Người nhận</label>
                            <select class="form-control" id="nguoinhan">
                            </select>
                            <label for="nguoi_tk">Người TK</label>
                            <select class="form-control" id="nguoi_tk">
                            </select>
                            <label for="khonhan">Kho nhận</label>
                            <select class="form-control" id="khonhan">
                            </select>
                            <label for="somay">Mã HD</label>
                            <input type="text" class="form-control" id="ma_hd">
                            <label for="somay">Ngày HD</label>
                            <input type="date" class="form-control" id="ngay_hd">
                            <label for="somay">Mã ID</label>
                            <input type="text" class="form-control" id="ma_id">
                            <label for="somay">Giá nhập</label>
                            <input type="text" class="form-control" id="gianhap" >
                        </div>
                    </div>
                    <div class=" button_dau">
                        <button type="button" class="btn btn-primary btn-sm">KẾT THÚC</button>
                        <button type="button" class="btn btn-primary btn-sm">NHẬP</button>
                        <button type="file" class="btn btn-primary btn-sm " >NHẬP TỪ FILE</button>
                    </div>
                </div>
                <!-- end nhapxe-->
                <!-- div ban xe-->
                <div class="row tab-wrapper" id="tab-banxe">
                    <div class=" col-sm-6">
                        <div class="form-group">
                            <label for="sodh">Số HD</label>
                            <input type="text" class="form-control" id="sodh" >
                            <label for="hoten">Họ và Tên</label>
                            <input type="text" class="form-control" id="hoten" >
                            <label for="ngaysinh">Ngày sinh</label>
                            <input type="date" class="form-control" id="ngaysinh" >
                            <label for="sodt">Số điện thoại</label>
                            <input type="text" class="form-control" id="sodt" >
                            <label for="date">Ngày mua</label>
                            <input type="text" class="form-control" id="ngaymua" >
                            <label for="diachi">Đỉa chỉ</label>
                            <input type="text" class="form-control" id="diachi" >
                            <label for="phuong">Phường</label>
                            <input type="text" class="form-control" id="phuong" >
                            <label for="thanhpho">Thành Phố</label>
                            <input type="text" class="form-control" id="thanhpho" >
                            <label for="tinh">Tỉnh</label>
                            <input type="text" class="form-control" id="tinh" >
                            <label for="somay">Số máy</label>
                            <select class="form-control" id="somay"></select>

                            <div class="form_check">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineCheckbox1">Quà tặng :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">mũ BH</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                    <label class="form-check-label" for="inlineCheckbox3">áo mưa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">móc khóa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                    <label class="form-check-label" for="inlineCheckbox3">áo trùm xe</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                    <label class="form-check-label" for="inlineCheckbox3">ba lô</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=" col-sm-6">
                        <div class="form-group" >
                            <label for="tenxe">Tên xe</label>
                            <input type="text" class="form-control" id="tenxe" >
                            <label for="mauxe">Mẫu xe</label>
                            <input type="text" class="form-control" id="mauxe">
                            <label for="somay">Ngày HD</label>
                            <input type="date" class="form-control" id="ngay_hd">
                            <label for="kho">Kho</label>
                            <input type="text" class="form-control" id="kho">
                            <label for="tinhtrang">Tình trạng </label>
                            <input type="text" class="form-control" id="tinhtrang" >
                            <label for="giaban">Giá bán</label>
                            <input type="text" class="form-control" id="giaban" >
                            <label for="gop">Góp</label>
                            <select class="form-control" id="gop"></select>
                            <label for="duatruoc">Đưa trước</label>
                            <input type="text" class="form-control" id="duatruoc" >
                            <label for="conlai">Còn lại</label>
                            <input type="text" class="form-control" id="conlai" >
                            <label for="vn_bh">NV BH</label>
                            <select class="form-control" id="vn_bh"></select>
                            <label for="sokhung">Số khung</label>
                            <input type="text" class="form-control" id="sokhung" >

                        </div>
                    </div>

                    <div class="col-sm-6"><button type="button" class="btn btn-primary btn-sm ">LẤY DỮ LIỆU</button></div>
                    <div class="col-sm-6"><button type="button" class="btn btn-primary btn-sm ">NHẬP XE</button></div>
                </div>
                <!-- end ban xe-->
                <!-- div congto-->
                <div class="row tab-wrapper" id="tab-congto">
                    <div class="col-sm-6">
                        <label for="ten_kh">Tên khách hàng</label>
                        <select class="form-control" id="ten_kh"></select>
                        <label for="ngaymua">Ngày mua</label>
                        <input type="date" class="form-control" id="ngaymua" >
                        <label for="giaban">Giá bán</label>
                        <input type="text" class="form-control" id="giaban" >
                        <label for="tratruoc">Trả trước</label>
                        <input type="text" class="form-control" id="tratruoc" >
                        <label for="Tralan_1">Trả lần 1</label>
                        <input type="text" class="form-control" id="Tralan_1" >
                    </div>
                    <div class=" col-sm-6">
                        <div class="form-group">
                            <label for="conlai">Còn lại</label>
                            <input type="text" class="form-control" id="conlai" >
                            <label for="tenxe">Tên xe</label>
                            <input type="text" class="form-control" id="sokhung" >
                            <label for="somay">Số máy</label>
                            <input type="text" class="form-control" id="somay" >
                            <label for="tientra">Tiền trả</label>
                            <input type="text" class="form-control" id="tientra" >
                            <label for="ngaytra">Ngày trả</label>
                            <input type="date" class="form-control" id="ngaytra" >
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-sm">LẤY DỮ LIỆU</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-sm">NHẬP CÔNG NỢ</button>
                    </div>
                </div>
                <!-- end congto-->
                <!-- div KT_quatang-->
                <div class="row tab-wrapper" id="tab-tk_quatang">
                    <div class="col-sm-3"></div>
                    <div class=" col-sm-6">
                        <div class="form-group">
                            <label for="ten_kh">Tên khách hàng</label>
                            <select class="form-control" id="ten_kh"></select>
                            <div class="form_check">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineCheckbox1">Quà tặng :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">mũ BH</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                    <label class="form-check-label" for="inlineCheckbox3">áo mưa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">móc khóa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                    <label class="form-check-label" for="inlineCheckbox3">áo trùm xe</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                    <label class="form-check-label" for="inlineCheckbox3">ba lô</label>
                                </div>
                                <label for="ngaymua" class="ngaymua">Ngày nhận</label>
                                <input type="date" class="form-control" id="ngaymua" >
                                <label for="somay">Số máy</label>
                                <input type="text" class="form-control" id="somay" >
                                <label for="ngaysinh">Ngày sinh</label>
                                <input type="date" class="form-control" id="ngaysinh" >
                                <div class="btn_kt">
                                    <button type="button" class="btn btn-primary btn-sm">LẤY KẾT QUẢ</button>
                                    <button type="button" class="btn btn-primary btn-sm">KẾT THÚC</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
                <!-- end  KT_quatang-->
                <!-- div xuat noi bo-->
                <div class="row tab-wrapper" id="tab-xuat_noibo">
                    <div class="col-sm-6">
                        <label for="sodh">Số HD</label>
                        <input type="text" class="form-control" id="sodh" >
                        <label for="somay">Số máy</label>
                        <select class="form-control" id="somay"></select>
                        <label for="sokhung">Số khung</label>
                        <input type="text" class="form-control" id="sokhung" >
                        <label for="loaixe">Loại xe</label>
                        <input type="text" class="form-control" id="loaixe" >
                        <label for="mauxe">Màu xe</label>
                        <input type="text" class="form-control" id="mauxe" >

                    </div>
                    <div class=" col-sm-6">
                        <div class="form-group">
                            <label for="tinhtrang">Tình trạng</label>
                            <input type="text" class="form-control" id="tinhtrang" >
                            <label for="khoxuat">Kho xuất</label>
                            <input type="text" class="form-control" id="khoxuat" >
                            <label for="khonhap">Kho Nhập</label>
                            <select class="form-control" id="khonhap"></select>
                            <label for="somay">Số máy</label>
                            <input type="text" class="form-control" id="somay" >
                            <label for="ngayxuat">Ngày xuất</label>
                            <input type="date" class="form-control" id="ngayxuat" >
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-sm">LẤY DỮ LIỆU</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-sm">NHẬP CÔNG NỢ</button>
                    </div>
                </div>
                <!-- end  xuat noi bo-->
                <!-- div ban si-->
                <div class="row tab-wrapper" id="tab-bansi">
                    <div class="col-sm-6">
                        <label for="sodh">Số HD</label>
                        <input type="text" class="form-control" id="sodh" >
                        <label for="somay">Số máy</label>
                        <select class="form-control" id="somay"></select>
                        <label for="sokhung">Số khung</label>
                        <input type="text" class="form-control" id="sokhung" >
                        <label for="loaixe">Loại xe</label>
                        <input type="text" class="form-control" id="loaixe" >
                        <label for="mauxe">Màu xe</label>
                        <input type="text" class="form-control" id="mauxe" >
                        <label for="doixe">Đời xe</label>
                        <input type="text" class="form-control" id="doixe" >
                    </div>
                    <div class=" col-sm-6">
                        <div class="form-group">
                            <label for="nhacungcap">Nhà cung cấp</label>
                            <input type="text" class="form-control" id="nhacungcap" >
                            <label for="gianhap">Giá nhập</label>
                            <input type="text" class="form-control" id="gianhap" >
                            <label for="khoxuat">Kho xuất</label>
                            <input type="text" class="form-control" id="khoxuat" >
                            <label for="tinhtrang">Tình trạng</label>
                            <input type="text" class="form-control" id="tinhtrang" >

                            <label for="giaban">Giá bán</label>
                            <input type="text" class="form-control" id="giaban" >
                            <label for="noixuat">Nơi xuất</label>
                            <input type="text" class="form-control" id="noixuat" >
                            <label for="ngayxuat">Ngày xuất</label>
                            <input type="date" class="form-control" id="ngayxuat" >
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-sm">LẤY DỮ LIỆU</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary btn-sm">XUẤT SỈ</button>
                    </div>
                </div>
                <!-- end  ban si-->
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
