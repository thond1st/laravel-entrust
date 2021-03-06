@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
				Create Role
			</div>
			<div class="panel-body">
				<form action="{{ route('role_store') }}" method="post" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-sm-2 control-label">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name">
							@if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
					<div class="form-group {{ $errors->has('display_name') ? 'has-error' : ''}}">
						<label for="display_name" class="col-sm-2 control-label">Display Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="display_name">
							@if ($errors->has('display_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('display_name') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
					<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
						<label for="description" class="col-sm-2 control-label">Description:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="description">
							@if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
					<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success">Create</button>
					    </div>
				  	</div>
				</form>
			</div>
		</div>
	</div>
@stop
