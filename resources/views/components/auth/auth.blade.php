<div class="col-2">
       
    
    <div class=" align-self-center d-flex">
        @if (Route::has('login'))
        
        <div class="login-buttons-sm login-buttons mx-auto text-center" style="font-family: Times New Roman">
                @auth
                <div class="flex-center">
                    <span href="{{ url('/') }}" class="col-10 h9">Welcome {{ auth()->user()->firstName }}!</span>
                    <form method="POST" action="/logout" class="mb-0">
                    @csrf
                        <button type="submit" class="btn col-5 flex-center">
                            <i class="fa-arrow-right-from-bracket fa-solid p-1"></i>
                        </button>
                    </form>
                </div>
                @else
                <div class="rightHeader searchBarIcon">
                    <a href="{{ route('login') }}" class="text-center" style="color: black">
                        <i class="fa-solid fa-circle-user"></i>
                        {{-- <img class="loginimg" src="/images/loginbtn1.png" /> --}}
                        {{-- Log In --}}
                    </a>
                </div>
                  
                @endauth
            </div>
        @endif
    </div>
</div>