@extends('app')

@section('content')
<script language="javascript">
	$(document).ready(function($) {
	    $('#datetimepicker1').datetimepicker({
	        step: 5,
	        timepicker:false,
 			format:'d-m-Y',
	    });
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>List Staff</strong>
					{!! Form::open(['URL'=>'payroll.index','method'=>'get','class'=>'form-inline']) !!}
						<div class="form-group">
							{!! Form::select('district',[''=>'District']+$districtAll,$district_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('hoscat',[''=>'Hospital Category']+$hospitalCategoryAll,$hoscat_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('designation',[''=>'Designation']+$designationAll,$designation_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('type',$jobType,$type_view,['class'=>'']) !!}
						</div>
						<div class="form-group">
							<select name="month" class="">
								<option value="">Month</option>
								@foreach($generatePay as $id => $value)
									<option value="{{ $id }}">{{ date('F Y',strtotime($value)) }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							{!! Form::text('name',$name_view,['class'=>'','placeholder'=>'Name']) !!}
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">
								Search
							</button>
						</div>
					{!! Form::close() !!}
				</div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th class="col-md-1 text-center">#</th>
					    <th class="col-md-2">Name</th>
					    <th class="col-md-2">Designation</th>
					    <th class="col-md-2">Posting Place</th>
					    <th class="col-md-1 text-center">Category</th>
					    <th class="col-md-1 text-center">Approved Pay</th>
					    <th class="col-md-1 text-center">Arrear</th>
					    <th class="col-md-1 text-center">Loan Deduct</th>
					    <th class="col-md-1 text-center">TOTAL</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($staffAll as $staff)
						<tr bgcolor="">
					    	<td height="25" class="text-center">{{ $index++ }}</td>
					    	<td height="25" align="left">{{ $staff->name }}&nbsp;</td>
					    	<td height="25" align="left"><?php $designation = App\Designation::find($staff->designation_id); echo $designation->name; ?></td>
					    	<td height="25" align="left"><?php $posting = App\Hospital::find($staff->hospital_id); echo $posting->name ?></td>
					    	<td height="25" class="text-center">{{ $posting->type }}&nbsp;</td>
					    	<td height="25" class="text-center">
					    		<?php 
					    			$approvedpay = App\ApprovedPay::where('designation_id','=',$staff->designation_id)
					    											->where('hospital_type','=', $posting->type)
					    											->where('status','=','Active')
					    											->orderBy('created_at','desc')
					    											->limit(1)
					    											->get();
					    			$approvedPayId = 0;
					    			$approvedAmount = 0;
					    			foreach ($approvedpay as $approved) {
					    				echo $approvedAmount = $approved->amount;
					    				$approvedPayId = $approved->id; 
					    			}
					    		?>&nbsp; 
					    	</td>
					    	<td height="25" class="text-center">
					    		<?php 
					    			if($approvedPayId != 0) { $approvedPayId = "AND approved_pay_id='$approvedPayId'"; } else { $approvedPayId = ''; }
					    			//echo "designation_id='$staff->designation_id' AND hospital_type='$posting->type' $approvedPayId ORDER BY created_at DESC LIMIT 1";
					    			$generatepay = App\GeneratePay::whereRaw("designation_id='$staff->designation_id' AND hospital_type='$posting->type' $approvedPayId ORDER BY created_at DESC LIMIT 1")->get();
					    			$generateArrear = 0;
					    			foreach ($generatepay as $generate) {
					    				echo $generateArrear = $generate->arrear;
					    			}
					    		?>&nbsp;
					    	</td>
					    	<td height="25" class="text-center">
					    		<?php
					    			$emi = 0;
					    			$totalLoans = App\Loan::whereRaw("staff_id=$staff->id AND status='Active'")->get();
					    			foreach ($totalLoans as $loan) {
					    				$emi = $emi+$loan->emi;
					    			}
					    			echo $emi;
					    		?>
					    		&nbsp;
					    	</td>
					    	<td height="25" class="text-center">{{ ($approvedAmount + $generateArrear)-$emi }}&nbsp;</td>
						</tr>
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $staffAll !!}
		</div>
	</div>
</div>
@endsection