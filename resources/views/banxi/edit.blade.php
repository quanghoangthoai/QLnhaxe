@extends('ktquatang.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">sửa thông tin công nợ</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('ktquatang.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ktquatang.update',$ktquatang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- div ktquatang-->
            <div class="row tab-wrapper" id="tab-tk_quatang">
                <div class="col-sm-3"></div>
                <div class=" col-sm-6">
                    <div class="form-group">
                        <label for="ten_kh">Tên khách hàng</label>
                        <select class="form-control" id="ten_kh" name="khachhang_id">
                            @foreach($khachhang as $khachhang)

                                <option value="{{ $khachhang->id }}">{{ $khachhang->Hovaten }}
                                    @if($ktquatang->khachhang->id == $khachhang->id)
                                        {{ 'selected' }}
                                    @endif
                                </option>
                            @endforeach
                        </select>
                        <div class="form_check">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineCheckbox1">Quà tặng :</label>
                                <select class="form-control" id="ten_kh" name="quatang_id">
                                    @foreach($quatang as $quatang)
                                        <option value="{{ $quatang->id }}">{{ $quatang->tenquatang }}
                                            @if($ktquatang->quatang->id ==$quatang->id)
                                                {{ 'selected' }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="ngaymua" class="ngaymua">Ngày nhận</label>
                            <input type="date" class="form-control" id="ngaymua" name="ngaynhan" value="{{$ktquatang->ngaynhan}}" >
                            <label for="somay">Số máy</label>
                            <select class="form-control" id="ten_kh" name="thongtinxe_id">
                                @foreach($thongtinxe as $thongtinxe)
                                    <option value="{{ $thongtinxe->id }}">{{ $thongtinxe->somay }}
                                        @if($ktquatang->thongtinxe->id == $thongtinxe->id)
                                            {{ 'selected' }}
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <label for="ngaysinh">Ngày sinh</label>
                            <select class="form-control" id="ten_kh" name="khachhang_id">
                                @foreach($khachhang as $khachhang)
                                    <option value="{{ $khachhang->id }}">{{ $khachhang->ngaysinh }}
                                        @if($ktquatang->khachhang->id == $khachhang->id)
                                            {{ 'selected' }}
                                        @endif
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
            <!-- end ktquatang-->

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">cập nhập</button>
            </div>
        </div>

    </form>
@endsection
