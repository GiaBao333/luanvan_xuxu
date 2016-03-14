@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thí sinh
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/thisinh') }}" title="">Thí sinh</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm thí sinh
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        {!! Form::model($thisinh,array('route'=>array('thisinh.update',$thisinh->id),'method'=>'PUT')) !!}
        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        	<div class="col-lg-8">
        		<div class="form-group">
                    <label for="sbd" class="control-label">SBD *</label>
                    {!! Form::text('sbd', Input::old('sbd'), array('class'=>'form-control')) !!}

                    <label for="ten" class="control-label">Tên *</label>
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}

                    <label for="ngaysinh" class="control-label">Ngày sinh *</label>
                    {!! Form::text('ngaysinh', Input::old('ngaysinh'), array('class'=>'form-control')) !!}

                    <label for="sdt" class="control-label">SDT *</label>
                    {!! Form::text('sdt', Input::old('sdt'), array('class'=>'form-control')) !!}

                    <label for="email" class="control-label">Email *</label>
                    {!! Form::text('email', Input::old('email'), array('class'=>'form-control')) !!}

                    <label for="diachi" class="control-label">Địa chỉ *</label>
                    {!! Form::text('diachi', Input::old('diachi'), array('class'=>'form-control')) !!}

                    <label for="tencha" class="control-label">Tên cha *</label>
                    {!! Form::text('tencha', Input::old('tencha'), array('class'=>'form-control')) !!}

                    <label for="nncha" class="control-label">Nghề nghiệp cha *</label>
                    {!! Form::text('nncha', Input::old('nncha'), array('class'=>'form-control')) !!}

                    <label for="tenme" class="control-label">Tên mẹ *</label>
                    {!! Form::text('tenme', Input::old('tenme'), array('class'=>'form-control')) !!}

                    <label for="nnme" class="control-label">Nghề nghiệp mẹ *</label>
                    {!! Form::text('nnme', Input::old('nnme'), array('class'=>'form-control')) !!}

                    <label for="tudo" class="control-label">Thí sinh tự do *</label>
                    {!! Form::text('tudo', Input::old('tudo'), array('class'=>'form-control')) !!}

                    <label for="ap_kv_id" class="control-label">Thuộc ấp-kv *</label>
                    {!! Form::text('ap_kv_id', Input::old('ap_kv_id'), array('class'=>'form-control')) !!}

                    <label for="kv_ut_id" class="control-label">Thuộc kv-ut *</label>
                    {!! Form::text('kv_ut_id', Input::old('kv_ut_id'), array('class'=>'form-control')) !!}

                    <label for="doi_tuong_id" class="control-label">Thuộc đối tượng *</label>
                    {!! Form::text('doi_tuong_id', Input::old('doi_tuong_id'), array('class'=>'form-control')) !!}

                    <label for="ton_giao_id" class="control-label">Thuộc tôn giáo *</label>
                    {!! Form::text('ton_giao_id', Input::old('ton_giao_id'), array('class'=>'form-control')) !!}

                    <label for="dan_toc_id" class="control-label">Thuộc dân tộc *</label>
                    {!! Form::text('dan_toc_id', Input::old('dan_toc_id'), array('class'=>'form-control')) !!}

                    <label for="truong_thpt_id" class="control-label">Thuộc trường thpt *</label>
                    {!! Form::text('truong_thpt_id', Input::old('truong_thpt_id'), array('class'=>'form-control')) !!}

                    <label for="diem_kk_id" class="control-label">Điểm khuyến khích *</label>
                    {!! Form::text('diem_kk_id', Input::old('diem_kk_id'), array('class'=>'form-control')) !!}

                    <label for="hanh_kiem_id" class="control-label">Thuộc hạnh kiểm *</label>
                    {!! Form::text('hanh_kiem_id', Input::old('hanh_kiem_id'), array('class'=>'form-control')) !!}

                    <label for="hoc_luc_id" class="control-label">Thuộc Tỉnh-TP *</label>
                    {!! Form::text('hoc_luc_id', Input::old('hoc_luc_id'), array('class'=>'form-control')) !!}
                </div>

                
                
                <div class="form-group">
                {!! Form::submit('Thêm', array('class'=>'btn-primary form-control')) !!}
        	</div>
        	</div>
        {!! Form::close() !!}
        </div>
        </div>
	</div>
</div>
@stop