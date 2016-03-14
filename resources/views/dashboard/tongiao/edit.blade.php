@extends('layout.dashboard')
@section('main')
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Tôn giáo
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/tongiao') }}" title="">Tôn giáo</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm Tôn giáo
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
        {!! Form::model($tongiao,array('route'=>array('tongiao.update',$tongiao->id),'method'=>'PUT')) !!}
        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        		<div class="form-group">
                    <label for="ten" class="control-label">Tên *</label>
                    {!! Form::text('ten', Input::old('ten'), array('class'=>'form-control')) !!}
                </div>

                
                
                {!! Form::submit('Thêm', array('class'=>'btn-primary form-control')) !!}
        {!! Form::close() !!}
        </div>
        </div>
	</div>
</div>
@stop