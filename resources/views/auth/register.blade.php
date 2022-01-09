@extends('layouts.app-login')

@section('content')
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif
							<form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" value="{{ old('name')}}" required autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>

                                <div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="{{ old('username')}}" required autofocus>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>

								<div class="form-group">
									<label for="email">Gender</label>
                                    <input type="radio" name="gender" value="female">Female
                                    <input type="radio" name="gender" value="male">Male
                                    <input type="radio" name="gender" value="other">Other
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" value="" required data-eye>
                                    @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
							
                                <div class="form-group">
									<label for="password_confirmation">Repeat Password</label>
									<input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="" required data-eye>
                                    @error('password_confirmation')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
							

                                <div class="form-group">
									<label for="address">Address</label>
									<input id="address" type="text" class="form-control" name="address" value="{{ old('address')}}" required data-eye>
                                    @error('address')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
							

                                <div class="form-group">
									<label for="contact_no">Contact Number</label>
									<input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ old('contact_no')}}" required data-eye>
                                    @error('contact_no')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
							

                                <div class="form-group">
                                <label class="control-label">
                                    Date From
                                    </label>
                                    <input  id="from_date" class="date form-control" type="text" name="from_date" value="{{ old('from_date')}}" required data-eye>
                    
                                </div>
                                    @error('from_date')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
							
                                <div class="form-group">
                                <label class="control-label">
                                    Date To
                                    </label>
                                    <input  id="to_date" class="date form-control" type="text" name="to_date" value="{{ old('to_date')}}" required data-eye>
                    
                                </div>
                                    @error('to_date')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <div class="form-group">
                                <label class="control-label">
                                    Check In Time
                                    </label>
                                    <input  id="check_in" class="form-control" type="time" name="check_in" value="{{ old('check_in')}}" required data-eye>
                    
                                </div>
                                    @error('check_in')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <div class="form-group">
									<label for="room_id">Room</label>
                                    <select id="room_id" name="room_id" class="form-group" >
                                    <option value="" selected disabled>Select</option>
                                        @foreach($rooms as $room)
                                            <option value="{{$room->id}}"> {{$room->title}}</option>
                                        @endforeach
                                        </select>
                                        @error('room_id')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <div class="form-group">
									<label for="floor_id">Floor</label>
                                    <select id="floor_id" name="floor_id" class="form-group" >
                                    <option value="" selected disabled>Select</option>
                                        @foreach($floors as $floor)
                                            <option value="{{$floor->id}}"> {{$floor->title}}</option>
                                        @endforeach
                                        </select>
                                        @error('floor_id')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror

								
                    </div>
							

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="{{ route('login')}}">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash;
				</div>
			</div>
		</div>
	</section>
    <script type="text/javascript">
    $('.date').datepicker({  
       format: 'yyyy-mm-dd'
     });  
</script> 
@endsection