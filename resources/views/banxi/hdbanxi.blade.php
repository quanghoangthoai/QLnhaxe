@extends('banxe.layout')
@section('content')
    <div class="container">
        <div class="">
            <div class="col-sm-12">
                <h3 class="text-uppercase text-center alert alert-primary"> HÓA ĐƠN XUẤT KHO bán sĩ </h3>
            </div>
            <form action="{{ route('banxi.store') }}" method="POST">
                @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="form_xuatnb mt-3">
                        <div class="form-inline ">
                            <div class="form-group">
                                <label for="exampleInputName2" class="text-uppercase">Ngày Xuất : </label>
                                <input type="date" class="form-control" name="ngayxuat" id="" placeholder="Jane Doe">
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputEmail2" class="mahd">Mã HÓA ĐƠN :</label>
                                <input type="text" class="form-control" name="maHD" id="exampleInputEmail2">
                            </div>
                        </div>
                        <br>
                        <div class="form-inline xuat_inline ">
                            <div class="form-group">
                                <label for="exampleInputEmail4" class="denkho_bx">ĐẾN KHO :</label>
                                <label for="khoxuat">Kho xuất</label>
                                <select class="form-control" name="kho_id" id="nameid">
                                    @foreach($khos as $kho)
                                        <option value="{{ $kho->id }}">{{ $kho->dia_diem }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div id='app'>
                                <a href="" @click.prevent="printme" class="btn btn-default"><i class="fa fa-print"></i> print</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- hết row ngày xuất bán lẻ -->
            <div class="row mt-3">
                <div class="col-sm-19">
                    <div class="">
                        <table class="table table-bordered table-hover text-uppercase">
                            <thead class=" text-uppercase">
                            <tr>

                                <th scope="col">loại xe</th>
                                <th scope="col">màu xe</th>
                                <th scope="col">số khung</th>
                                <th scope="col">số máy</th>
                                <th scope="col">giá bán</th>
                                <th><button type="button" name="add" class="btn btn-success btn-xs add"><span class="glyphicon glyphicon-plus"></span>+</button></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- hết row bảng xuất hóa đơn bán lẻ -->
            <div class="kiten_banxi">
                <div>

                    <div class="form-row">
                        <div class="col pr-5">
                            <label for="" class="text-uppercase lb_nv">Nhân viên bán</label>

                        </div>
                        <div class="col">
                            <label for="" class="text-uppercase lb_ql">QUẢN LÍ</label>

                        </div>
                        <div class="col ">
                            <label for="" class="text-uppercase lb_nnbanxi">NGƯỜI NHẬN</label>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
@endsection
@section('custom_js')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

        <script>
            var count = 0;

            $(document).on('click', '.add', function(){
                count++;
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" id="loaixe"  name="thongtinxe_id[]" class="form-control item_name " /></td>';
                html += '<td><input type="text" id="mauxe" name="thongtinxe_id[]" class="form-control item_name" /></td>';
                html += '<td> <input type="text"  name="thongtinxe_id[]" class="form-control item_name" /> </td>';
                html += '<td><input type="text"  name="thongtinxe_id[]" class="form-control item_name" /></td>';
                html += '<td><input type="text" name="giaban[]" class="form-control item_name" /></td>';
                html += '<td><button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-minus"></span>-</button></td>';
                $('tbody').append(html);
            });

            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
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
