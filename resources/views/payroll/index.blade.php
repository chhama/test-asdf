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
<style type="text/css">
@media print {
    .form-inline { display:none; }
    .printHide { display: none; }
    title { display:none; }
}

@media screen {
    .footerPrint { display:none; }
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading printHide"><strong>List Staff</strong>
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
									<?php
										if(isset($_GET['month']) && $_GET['month']==$value){
											$selected = "selected";
										} elseif(date('F Y') == date('F Y',strtotime($value)) && !isset($_GET['month'])){
											$selected = "selected";
										} else {
											$selected = "";
										}
									?>
									<option value="{{ date('Y-m-15',strtotime($value)) }}" {{ $selected }} >{{ date('F Y',strtotime($value)) }}</option>
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
					<?php
						if(isset($_GET['month'])){
							$dateMonth = $_GET['month'];
						} else {
							$dateMonth = date('d-m-Y');
						}
					?>
					<table class="footerPrint" width="100%">
						<tr>
							<td class="text-center"><strong>ACQUAINTANCE ROLL OF RCH/NRHM STAFFS FOR {{ strtoupper(date('F Y',strtotime($dateMonth))) }}</strong></td>
						</tr>
					</table>
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
					    			if(isset($_GET['month'])){ $month = "AND date='".$_GET['month']."'"; } else { $month="AND date='".date('Y-m-d')."'"; }
					    			$generatepay = App\GeneratePay::whereRaw("designation_id='$staff->designation_id' AND hospital_type='$posting->type' $month ORDER BY id DESC")->first();
					    			$generateArrear = 0;
					    			if(isset($generatepay)){
					    				$generateArrear = $generatepay->arrear;
					    				$approved_pay_id = $generatepay->approved_pay_id;
						    			$approvedpay = App\ApprovedPay::find($approved_pay_id);
						    			echo $approvedPay = $approvedpay->amount;
					    			} else {
					    				echo $approvedPay=0;
					    			}
					    			
					    			
					    		?>&nbsp; 
					    	</td>
					    	<td height="25" class="text-center">
					    		{{ $generateArrear }}&nbsp;
					    	</td>
					    	<td height="25" class="text-center">
					    		<?php
					    			if(isset($_GET['month'])){ $monthLoan = "AND created_at='".$_GET['month']."'"; } else { $monthLoan="AND created_at='".date('Y-m-d')."'"; }
					    			$totalLoans = App\LoanPay::whereRaw("staff_id=$staff->id $monthLoan")->sum('emi');
					    			if(isset($totalLoans)) { $emi = $totalLoans; } else { $emi=0; }
					    			echo $emi;
					    		?>
					    		&nbsp;
					    	</td>
					    	<td height="25" class="text-center">{{ ($approvedPay + $generateArrear)-$totalLoans }}&nbsp;</td>
						</tr>
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			<table class="footerPrint" width="100%">
				<tr>
					<td class="text-center"><strong>Sd/-<br>(DR.T.LALHMANGAIHI)<br>Jt. Mission Director:NHM<br>Mizoram: Aizawl</strong></td>
				</tr>
			</table>
			<div class="printHide">
				{!! $staffAll !!}
			</div>
		</div>
	</div>
</div>
@endsection