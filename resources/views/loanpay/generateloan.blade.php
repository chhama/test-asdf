@extends('app')

@section('content')
<div class="container">
	@if(Session::has('message'))
      <p class="alert alert-success"><strong>{{ Session::get('message') }}</strong></p>
  @endif
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List of Generated Loan</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  	<tr>
					    	<th class="col-md-2 text-center">#</th>
					    	<th class="col-md-10 text-center">Date</th>
					  	</tr>
					  	</thead>
					  	<tbody>
							@foreach($generateLoanAll as $generateLoan)
							<tr bgcolor="">
							    <td height="25" class="text-center">{{ $index++ }}</td>
							    <td height="25" class="text-center">{{  date('F Y',strtotime($generateLoan->created_at)) }}&nbsp;</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			{!! $generateLoanAll !!}
		</div>
		<div class="col-md-6">
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
							<button type="submit" class="btn btn-success" onclick="return confirm ('<?php echo ('Are you sure you want to GENERATE LOAN') ?>');">
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