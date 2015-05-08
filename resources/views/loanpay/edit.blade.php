@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Payed Loan</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-2">EMI</th>
					    <th class="col-md-2 text-center">Date</th>
					    <th class="col-md-2 action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					  	<?php $total=0; ?>
					@foreach($loanPayAll as $loanPay)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $loanPay->emi }}&nbsp;</td>
					    <td height="25" class="text-center">{{  date('d-m-Y',strtotime($loanPay->created_at)) }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('loanpay.destroy', array($loanPay->id)),'method'=>'delete')) !!}
								<a href="{{route('loanpay.edit', array($loanPay->id,'loan_id'=>$loanPay->loan_id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit loan" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove loan" value="{{$loanPay->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    <?php $total = $total+$loanPay->emi; ?>
					@endforeach
					<tr bgcolor="">
					    <td height="25" class="text-center"><strong>Total</strong></td>
					    <td height="25" align="left"><strong>: {{ $total }}</strong>&nbsp;</td>
					    <td height="25" class="text-center">&nbsp;</td>
					    <td height="25" class="text-center">&nbsp;</td>
					    
					    </tr>
					</tbody>
					</table>
				</div>
			</div>
			{!! $loanPayAll !!}
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Pay Loan</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::model($loanPayById, ['route'=>['loanpay.update',$loanPayById->id],'method'=>'patch','class'=>'form-horizontal']) !!}
					{!! Form::hidden('loan_id',$loan_id) !!}
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