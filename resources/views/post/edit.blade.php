@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Edit Post</strong></div>
			<div class="panel-body">
				{!! Form::model($postById,['route'=>['post.update',$postById->id],'method'=>'patch','class'=>'form-horizontal']) !!}
				{!! Form::hidden('user_id',null) !!}
				<div class="form-group">
					<div class="col-md-6">
						{!! Form::label('Category','',['class'=>'control-label'])!!}
						{!! Form::select('category_id',$categoryAll,$postById->category_id,['class'=>'form-control']) !!}
						@if($errors->has('category_id'))
							<span class="text-danger">{{$errors->first('category_id')}}</span>
						@endif
					</div>
					<div class="col-md-6">
						{!! Form::label('Hightlight','',['class'=>'control-label'])!!}
						{!! Form::select('highlight',['Yes'=>'Yes','No'=>'No'],$postById->highlight,['class'=>'form-control']) !!}
						@if($errors->has('highlight'))
							<span class="text-danger">{{$errors->first('highlight')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						{!! Form::label('Title','',['class'=>'control-label'])!!}
						{!! Form::text('title',null,['class'=>'form-control']) !!}
						@if($errors->has('title'))
							<span class="text-danger">{{$errors->first('title')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						{!! Form::label("Body",'',['class'=>'control-label'])!!}
						{!! Form::textarea('body',null,['class'=>'form-control']) !!}
						@if($errors->has('body'))
							<span class="text-danger">{{$errors->first('body')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<button type="submit" class="btn btn-success">
							Save
						</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

<script language='javascript'>
    $('#datetimepicker').datetimepicker({
        step: 5
    });

</script>
@endsection