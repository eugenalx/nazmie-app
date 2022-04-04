<div class="row col-12 ">
    <div class="col-sm-3 col-md-2 "></div>   
    
    <div class="col-sm-3 col-md-2 mb-2 align-self-md-center align-self-sm-center d-flex">
        @if (Route::has('login'))
        
        <div class="login-buttons-sm login-buttons mx-auto text-center" style="font-family: Times New Roman">
                @auth
                    <a href="{{ url('/') }}" style="padding-right: 5px; color: black">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-center" style="color: black">
                        <img class="loginimg" src="/images/loginbtn1.png" />
                        {{-- Log In --}}
                    </a>
                  
                @endauth
            </div>
        @endif
    </div>
</div>