<x-layout>

{{-- <div class="loginSlide">teste</div> --}}

<div class="custom-card-login container mt-3 mb-5">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto mb-2">
                <input id="role" type="hidden" class="form-control border-0 border-bottom" name="role" value="{{ old('role') }}" 
                required ="role" 
                autofocus placeholder={{ __('Role') }}>

                @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto mb-2">
                <input id="firstName" type="text" class="form-control border-0 border-bottom" name="firstName" value="{{ old('firstName') }}" 
                required ="firstName" 
                autofocus placeholder='First Name'>

                @error('firstName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto mb-2">
                <input id="lastName" type="text" class="form-control border-0 border-bottom" name="lastName" value="{{ old('lastName') }}" 
                required ="lastName" 
                autofocus placeholder='Last Name'>

                @error('lastName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        @csrf
        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto mb-2">
                <input id="username" type="text" class="form-control border-0 border-bottom @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" 
                required ="username" 
                autofocus placeholder={{ __('Username') }}>

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto mb-2">
                <input id="email" type="email" class="form-control border-0 border-bottom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                required ="email" 
                autofocus placeholder={{ __('E-Mail Address') }}>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto  mb-2">
                <input id="password" type="password" class="form-control border-0 border-bottom @error('password') is-invalid @enderror" name="password" 
                required ="current-password" 
                placeholder ={{ __('Password') }}>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto  mb-2">
                <input id="confirmPassword" type="password" class="form-control border-0 border-bottom @error('password') is-invalid @enderror" name="confirmPassword" 
                required ="confirm-password" 
                placeholder ='Confirm Password'>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 col-md-6 mx-auto">
                <button type="submit" class="btn btn-primary col-12 mx-auto">
                    {{ __('Register') }}
                </button>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 col-md-6 row mx-auto">
                
                @if (Route::has('login'))
                    <a class="btn btn-link custom-forgot-your-password col-6 mx-auto " href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                @endif
            </div>
        </div>
      
    </form>
</div>


{{-- <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="javascript:void(0)" class="opennav"  id="Mynav" onclick="openNav()">About</a>
    <div class="overlay-content">
      <p a href="javascript:void(0)" class=""  id="Mynav" onclick="openNav()">About</p>
      
    </div>
  </div> --}}
</x-layout>