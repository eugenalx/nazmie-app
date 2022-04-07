<div class="col-2">
       
    
    <div class=" mb-2 align-self-center d-flex">
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