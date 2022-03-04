@extends('layouts.app')

@push('style')
	<style>
		.check{
			border: 1px solid red;
		}
		.message{
			color: red;
		}

		.form-group{
			margin-bottom: 20px
		}
	</style>
@endpush

@section('content')
<div class="container">
	<h3 style="margin-bottom:15px;">Thêm Người Dùng</h3>
	<div class="row">
	  <div class="col-md-12">
		<form action="{{ route('users.store') }}" method="post">
		  @csrf            
		  <div class="form-group">
			  <label @error('name') class="message" @enderror>Name</label>
			  <input type="text" class="form-control @error('name') check @enderror" name="name"  value="{{ old('name') }}">
			  @error('name')
				  <span class="message">{{ $message }}</span>
			  @enderror
		  </div>
		  <div class="form-group">
			  <label @error('email') class="message" @enderror>Email</label>
			  <input type="text" class="form-control @error('email') check @enderror" name="email"  value="{{ old('email') }}">
			  @error('email')
				  <span class="message">{{ $message }}</span>
			  @enderror
		  </div>
		  <div class="form-group">
			  <label @error('password') class="message" @enderror>password</label>
			  <input type="password" class="form-control @error('password') check @enderror" name="password">
			  @error('password')
				  <span class="message">{{ $message }}</span>
			  @enderror
		  </div>
		  <div class="form-group">
			  <label @error('password_confirmation') class="message" @enderror>password_confirmation</label>
			  <input type="password" class="form-control @error('password_confirmation') check @enderror" name="password_confirmation">
			  @error('password_confirmation')
				  <span class="message">{{ $message }}</span>
			  @enderror
		  </div>
		  <div class="form-group">
			  <label @error('address') class="message" @enderror>address</label>
			  <input type="text" class="form-control @error('address') check @enderror" name="address"  value="{{ old('address') }}">
			  @error('address')
				  <span class="message">{{ $message }}</span>
			  @enderror
		  </div>
		  <div class="form-group">
			  <label @error('phone') class="message" @enderror>phone</label>
			  <input type="text" class="form-control @error('phone') check @enderror" name="phone"  value="{{ old('phone') }}">
			  @error('phone')
				  <span class="message">{{ $message }}</span>
			  @enderror
		  </div>
		  <button type="submit" class="btn btn-primary">Thêm mới</button>
		</form>
	  </div>
	</div>
  </div>
@endsection
