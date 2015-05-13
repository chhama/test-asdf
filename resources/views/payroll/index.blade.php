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
    div { font-size: 10px; }
}

@media screen {
    .footerPrint { display:none; }
}
</style>
<?php 
 function no_to_words($no)
 {   // global $words;
 	 $words = array('0'=> '' ,'1'=> 'one' ,'2'=> 'two' ,'3' => 'three','4' => 'four','5' => 'five','6' => 'six','7' => 'seven','8' => 'eight','9' => 'nine','10' => 'ten','11' => 'eleven','12' => 'twelve','13' => 'thirteen','14' => 'fouteen','15' => 'fifteen','16' => 'sixteen','17' => 'seventeen','18' => 'eighteen','19' => 'nineteen','20' => 'twenty','30' => 'thirty','40' => 'fourty','50' => 'fifty','60' => 'sixty','70' => 'seventy','80' => 'eighty','90' => 'ninty','100' => 'hundred &','1000' => 'thousand','100000' => 'lakh','10000000' => 'crore');
     if($no == 0)
         return ' ';
     else {           $novalue='';$highno=$no;$remainno=0;$value=100;$value1=1000;        
            while($no>=100)    {
                 if(($value <= $no) &&($no  < $value1))    {
                 $novalue=$words["$value"];
                 $highno = (int)($no/$value);
                 $remainno = $no % $value;
                 break;
                 }
                 $value= $value1;
                 $value1 = $value * 100;
             }        
          if(array_key_exists("$highno",$words))
               return $words["$highno"]." ".$novalue." ".no_to_words($remainno);
           else { 
             $unit=$highno%10;
              $ten =(int)($highno/10)*10;             
             return $words["$ten"]." ".$words["$unit"]." ".$novalue." ".no_to_words($remainno);
            }
     }
 }
 //echo no_to_words(999978987);
 
?> 
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
							<td class="text-center">
								<strong>
									ACQUAINTANCE ROLL OF RCH/NRHM STAFFS FOR {{ strtoupper(date('F Y',strtotime($dateMonth))) }}<br>
									<?php if(isset($_GET['district'])){
										$dist = App\District::find($_GET['district'])->name . 'DISTRICT';
										echo strtoupper($dist);
									} 
									?>
								</strong>
							</td>
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
					  	<?php
					  		$approvedPayTotal=0;
					  		$arrearTotal=0;
						    $loanDeduct=0;
						    $total=0;
					  	?>
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
						<?php
							$approvedPayTotal 	= $approvedPayTotal + $approvedPay;
							$arrearTotal		= $arrearTotal + $generateArrear;
							$loanDeduct			= $loanDeduct + $totalLoans;
							$total 				= $total + ($approvedPay + $generateArrear)-$totalLoans;
						?>
					@endforeach
						<tr>
						    <td class="col-md-1 text-center">&nbsp;</td>
						    <td class="col-md-2">&nbsp;</td>
						    <td class="col-md-2">&nbsp;</td>
						    <td class="col-md-1 text-right" colspan='2'><strong>SUB TOTAL</strong></td>
						    <td class="col-md-1 text-center"><strong>{{ number_format($approvedPayTotal) }}</strong></td>
						    <td class="col-md-1 text-center"><strong>{{ number_format($arrearTotal) }}</strong></td>
						    <td class="col-md-1 text-center"><strong>{{ number_format($loanDeduct) }}</strong></td>
						    <td class="col-md-1 text-center"><strong>{{ number_format($total) }}</strong></td>
					  	</tr>
					  	<tr>
						    <td class="col-md-1 text-center" colspan='9'><strong>(Rupees {{ no_to_words($total) }} ) only</strong></td>
					  	</tr>
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