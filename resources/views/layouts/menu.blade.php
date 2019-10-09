<div class="container">
    @yield('content')
    <div class="row xe">
        <div class="col-3 left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="danhmuc">
                    <span><i class="fas fa-bars"></i> Danh mục</span>
                </div>

                <a class="nav-link active" id="v-pills-moi-tab" data-toggle="pill" href="#v-pills-moi" role="tab" aria-controls="v-pills-moi" aria-selected="true">Mới</a>

                <a class="nav-link" id="v-pills-banxe-tab" data-toggle="pill" href="#v-pills-banxe" role="tab" aria-controls="v-pills-banxe" aria-selected="false">Bán xe</a>

                <a class="nav-link" id="v-pills-bansi-tab" data-toggle="pill" href="#v-pills-bansi" role="tab" aria-controls="v-pills-si" aria-selected="false">Bán sĩ</a>

                <a class="nav-link" id="v-pills-congno-tab" data-toggle="pill" href="#v-pills-congno" role="tab" aria-controls="v-pills-congno" aria-selected="false">Công nợ</a>
                <a class="nav-link" id="v-pills-khachhang-tab" data-toggle="pill" href="#v-pills-khachhang" role="tab" aria-controls="v-pills-khachhang" aria-selected="false">Khách hàng</a>
                <a class="nav-link" id="v-pills-kho-tab" data-toggle="pill" href="#v-pills-kho" role="tab" aria-controls="v-pills-kho" aria-selected="false">Kho</a>
                <a class="nav-link" id="v-pills-tk_quatang-tab" data-toggle="pill" href="#v-pills-tk_quatang" role="tab" aria-controls="v-pills-tk_quatang" aria-selected="false">TK Qùa tặng</a>
                <a class="nav-link" id="v-pills-migrations-tab" data-toggle="pill" href="#v-pills-migrations" role="tab" aria-controls="v-pills-migrations" aria-selected="false">Migrations</a>
                <a class="nav-link" id="v-pills-nhanvien-tab" data-toggle="pill" href="#v-pills-nhanvien" role="tab" aria-controls="v-pills-nhanvien" aria-selected="false">Nhân viên</a>
                <a class="nav-link" id="v-pills-nhapxe-tab" data-toggle="pill" href="#v-pills-nhapxe" role="tab" aria-controls="v-pills-nhapxe" aria-selected="false">Nhập xe</a>
                <a class="nav-link" id="v-pills-ps_resets-tab" data-toggle="pill" href="#v-pills-ps_resets" role="tab" aria-controls="v-pills-ps_resets" aria-selected="false">Password resets</a>
                <a class="nav-link" id="v-pills-quatang-tab" data-toggle="pill" href="#v-pills-quatang" role="tab" aria-controls="v-pills-quatang" aria-selected="false">Quà tặng</a>
                <a class="nav-link" id="v-pills-tt_xe-tab" data-toggle="pill" href="#v-pills-tt_xe" role="tab" aria-controls="v-pills-tt_xe" aria-selected="false">Thông tin xe</a>
                <a class="nav-link" id="v-pills-tragop-tab" data-toggle="pill" href="#v-pills-tragop" role="tab" aria-controls="v-pills-tragop" aria-selected="false">Trả góp</a>
                <a class="nav-link" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false">User</a>
                <a class="nav-link" id="v-pills-user_role-tab" data-toggle="pill" href="#v-pills-user_role" role="tab" aria-controls="v-pills-user_role" aria-selected="false">User role</a>
                <a class="nav-link" id="v-pills-xuat_nb-tab" data-toggle="pill" href="#v-pills-xuat_nb" role="tab" aria-controls="v-pills-xuat_nb" aria-selected="false">Xuất nội bộ</a>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-6 right">
            <div class="tab-content" id="v-pills-tabContent">
                <!--div mới-->
                <div class="tab-pane fade show active" id="v-pills-moi" role="tabpanel" aria-labelledby="v-pills-home-moi">
                    mới
                </div>
                <!--end div mới-->

                <!--div bán xe-->
                <div class="tab-pane fade" id="v-pills-banxe" role="tabpanel" aria-labelledby="v-pills-banxe-tab">

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
                </div>
                <!-- end bán xe-->

                <!--div  bán sĩ-->
                <div class="tab-pane fade" id="v-pills-bansi" role="tabpanel" aria-labelledby="v-pills-bansi-tab">
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
                </div>
                <!-- end bán sĩ-->

                <!--cộng nợ-->
                <div class="tab-pane fade" id="v-pills-congno" role="tabpanel" aria-labelledby="v-pills-congno-tab">
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
                </div>
                <!--end cộng nợ-->
                <!--khach hàng-->
                <div class="tab-pane fade" id="v-pills-khachhang" role="tabpanel" aria-labelledby="v-pills-khachhang-tab">
                    khách hàng
                </div>
                <!--end khách hàng-->
                <!--kho-->
                <div class="tab-pane fade" id="v-pills-kho" role="tabpanel" aria-labelledby="v-pills-kho-tab">
                    kho
                </div>
                <!--end kho-->
                <!--tk quà tặng-->
                <div class="tab-pane fade" id="v-pills-tk_quatang" role="tabpanel" aria-labelledby="	v-pills-tk_quatang-tab">
                    <div class="row tab-wrapper" >
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
                                        <button type="button" class="btn btn-primary btn-sm pl-2">LẤY KẾT QUẢ</button>
                                        <button type="button" class="btn btn-primary btn-sm">KẾT THÚC</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                </div>
                <!--end tk quà tặng-->
                <!--migrations-->
                <div class="tab-pane fade" id="v-pills-migrations" role="tabpanel" aria-labelledby="v-pills-migrations-tab">
                    migrations
                </div>
                <!--end migrations-->
                <!--nhân viên-->
                <div class="tab-pane fade" id="v-pills-nhanvien" role="tabpanel" aria-labelledby="v-pills-nhanvien-tab">
                    nhân viên
                </div>
                <!--end nhân viên-->
                <!--nhập xe-->
                <div class="tab-pane fade" id="v-pills-nhapxe" role="tabpanel" aria-labelledby="v-pills-nhapxe-tab">
                    nhập xes
                </div>
                <!--end nhập xe-->
                <!--password resets-->
                <div class="tab-pane fade" id="v-pills-ps_resets" role="tabpanel" aria-labelledby="v-pills-ps_resets-tab">
                    password resets
                </div>
                <!--end password resets-->
                <!--quà tặng-->
                <div class="tab-pane fade" id="v-pills-quatang" role="tabpanel" aria-labelledby="v-pills-quatang-tab">
                    quà tặng
                </div>
                <!--end quà tặng-->
                <!--thông tin xe-->
                <div class="tab-pane fade" id="v-pills-tt_xe" role="tabpanel" aria-labelledby="v-pills-tt_xe-tab">
                    thông tin xe
                </div>
                <!--end thông tin xe -->
                <!--trả góp-->
                <div class="tab-pane fade" id="v-pills-tragop" role="tabpanel" aria-labelledby="v-pills-tragop-tab">
                    trả góp
                </div>
                <!--end trả góp -->
                <!--User -->
                <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                    user
                </div>
                <!--end User -->
                <!--User role -->
                <div class="tab-pane fade" id="v-pills-user_role" role="tabpanel" aria-labelledby="v-pills-user_role-tab">
                    User role
                </div>
                <!--end User role -->
                <!--xuất nội bộ -->
                <div class="tab-pane fade" id="v-pills-xuat_nb" role="tabpanel" aria-labelledby="v-pills-xuat_nb-tab">
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
                </div>
                <!--end xuất nội bộ -->
            </div>
        </div>
        <hr>
    </div>
</div>