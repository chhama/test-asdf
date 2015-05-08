@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Loan</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-2">Loan Head</th>
					    <th class="col-md-2">Amount</th>
					    <th class="col-md-1">EMI</th>
					    <th class="col-md-1">Balance</th>
					    <th class="col-md-2 text-center">Date</th>
					    <th class="col-md-1 text-center">Status</th>
					    <th class="col-md-2 action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($loanAll as $loan)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left"><a href="{{ route('loanpay.index','loan_id='.$loan->id) }}">{{ $loan->loanhead->name }}</a>&nbsp;</td>
					    <td height="25" align="left">{{ $loan->amount }}&nbsp;</td>
					    <td height="25" align="left">{{ $loan->emi }}&nbsp;</td>
					    <td height="25" align="left">
					    	<?php
					    		$balance = App\LoanPay::where('loan_id','=',$loan->id)->sum('emi');
					    		echo $loan->amount - $balance;
					    	?>
					    &nbsp;</td>
					    <td height="25" class="text-center">{{  date('d-m-Y',strtotime($loan->created_at)) }}&nbsp;</td>
					    <td height="25" align="left">{{ $loan->status }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('loan.destroy', array($loan->id)),'method'=>'delete')) !!}
								<a href="{{route('loan.edit', array($loan->id,'staff_id'=>$loan->staff_id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit loan" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove loan" value="{{$loan->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $loanAll !!}
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add Loan</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['route'=>'loan.store','class'=>'form-horizontal']) !!}
					{!! Form::hidden('staff_id',$staff_id) !!}
						<div class="form-group">
							{!! Form::label('Loan Head','',['class'=>'control-label'])!!}
							{!! Form::select('loan_head_id',[''=>'']+$loanHeadAll,'',['class'=>'form-control','id'=>'loan_head_id']) !!}
							@if($errors->has('loan_head_id'))
								<span class="text-danger">{{$errors->first('loan_head_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Total Amount','',['class'=>'control-label'])!!}
							{!! Form::text('amount',null,['class'=>'form-control']) !!}
							@if($errors->has('amount'))
								<span class="text-danger">{{$errors->first('amount')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('EMI','',['class'=>'control-label'])!!}
							{!! Form::text('emi',null,['class'=>'form-control']) !!}
							@if($errors->has('emi'))
								<span class="text-danger">{{$errors->first('emi')}}</span>
							@endif
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								Save
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