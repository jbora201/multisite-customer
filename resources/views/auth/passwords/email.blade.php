@extends('layouts.login')

@section('content')
<div class=" card-box">
	<div class="panel-heading"> 
		<h3 class="text-center"> Reset Password </h3>
	</div> 
	<div class="panel-body">
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

		<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
			{{ csrf_field() }}

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

				<div class="col-md-12">
					<input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}" required>

					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-pink btn-block text-uppercase waves-effect waves-light">
						Send Password Reset Link
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
            
@endsection
