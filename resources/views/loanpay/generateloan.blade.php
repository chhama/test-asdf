@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Generate Loan</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['url'=>'loanpay/generateloan','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Month','',['class'=>'control-label'])!!}
							{!! Form::select('month',$month,date('m'),['class'=>'form-control','required']) !!}
							@if($errors->has('month'))
								<span class="text-danger">{{$errors->first('month')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Year','',['class'=>'control-label'])!!}
							{!! Form::select('year',$year,date('Y'),['class'=>'form-control','required']) !!}
							@if($errors->has('year'))
								<span class="text-danger">{{$errors->first('year')}}</span>
							@endif
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								Generate
							</button>
						</div>
					{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection