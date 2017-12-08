@extends('layouts.login')

@section('content')
<div class="card-box">
	<div class="panel-heading"> 
		<h3 class="text-center"> Reset <strong class="text-custom">Password</strong> </h3>
	</div> 
	<div class="panel-body">
		<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
			{{ csrf_field() }}

			<input type="hidden" name="token" value="{{ $token }}">

			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

				<div class="col-md-12">
					<input id="email" type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ $email or old('email') }}" required autofocus>

					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<div class="col-md-12">
					<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

					@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
				<div class="col-md-12">
					<input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>

					@if ($errors->has('password_confirmation'))
						<span class="help-block">
							<strong>{{ $errors->first('password_confirmation') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-pink btn-block text-uppercase waves-effect waves-light">
						Reset Password
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
            
@endsection
