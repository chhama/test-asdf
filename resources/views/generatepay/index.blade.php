@extends('app')

@section('content')
<script language="javascript">
	$(document).ready(function($) {
	    $('#datetimepicker1').datetimepicker({
	        step: 5,
	        timepicker:false,
 			format:'M-Y',
	    });
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Generate Pay</strong></div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-3">Designation</th>
					    <th class="col-md-2">Hospital Type</th>
					    <th class="col-md-1">Pay</th>
					    <th class="col-md-1">Arrear</th>
					    <th class="col-md-1 text-center">w.e.f</th>
					    <th class="col-md-1 text-center">Month</th>
					    <th class="col-md-2 action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($generatePayAll as $generatePay)
						<tr bgcolor="">
					    <td height="25" class="text-center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $generatePay->designation->name }}&nbsp;</td>
					    <td height="25" align="left">{{ $generatePay->hospital_type }}&nbsp;</td>
					    <td height="25" align="left">{{ $generatePay->approvedpay->amount }}&nbsp;</td>
					    <td height="25" align="left">{{ $generatePay->arrear }}&nbsp;</td>
					    <td height="25" align="left" class="text-center">{{ $generatePay->wef }}&nbsp;</td>
					    <td height="25" align="left" class="text-center">{{ date('M - Y',strtotime($generatePay->date)) }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('generatepay.destroy', array($generatePay->id)),'method'=>'delete')) !!}
								<a href="{{route('generatepay.edit', array($generatePay->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit generatePay" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove generatePay" value="{{$generatePay->id}}" style="padding:5px 10px 5px 10px;"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $generatePayAll !!}
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Add Approved Pay</strong></div>
				<div class="panel-body">
					<div class="col-md-12">
					{!! Form::open(['route'=>'generatepay.store','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Month','',['class'=>'control-label'])!!}
							{!! Form::text('date',null,['class'=>'form-control','id'=>'datetimepicker1']) !!}
							@if($errors->has('date'))
								<span class="text-danger">{{$errors->first('date')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Approved Pay','',['class'=>'control-label'])!!}
							<select name="approved_pay_id" class="form-control input-sm" required>
		                        <option></option>
		                        @foreach($designationAll as $designId => $designation)
		                            <optgroup label="{{ $designation }}">
		                            <?php
		                                $approvedPayByDesignationId = App\ApprovedPay::where('designation_id','=',$designId)->orderBy('hospital_type')->get(); 
		                                foreach ($approvedPayByDesignationId as $approvedPayByDesignation) {
		                                    echo "<option value='$approvedPayByDesignation->id'>$approvedPayByDesignation->hospital_type</option>";
		                                }
		                            ?>
		                            </optgroup>
		                        @endforeach
		                    </select>
							@if($errors->has('approved_pay_id'))
								<span class="text-danger">{{$errors->first('approved_pay_id')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Arrear','',['class'=>'control-label'])!!}
							{!! Form::text('arrear',null,['class'=>'form-control']) !!}
							@if($errors->has('arrear'))
								<span class="text-danger">{{$errors->first('arrear')}}</span>
							@endif
						</div>
						<div class="form-group">
							{!! Form::label('Arrear w.e.f','',['class'=>'control-label'])!!}
							{!! Form::text('wef',null,['class'=>'form-control']) !!}
							@if($errors->has('wef'))
								<span class="text-danger">{{$errors->first('wef')}}</span>
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