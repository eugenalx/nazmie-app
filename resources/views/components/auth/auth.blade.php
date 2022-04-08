<div class="col-2">
       
    
    <div class=" align-self-center d-flex">
        @if (Route::has('login'))
        
        <div class="login-buttons-sm login-buttons mx-auto text-center" style="font-family: Times New Roman">
                @auth
                <div class="flex-center">
                    <span href="{{ url('/') }}" class="col-12">Welcome {{ auth()->user()->firstName }}!</span>
                    <form method="POST" action="/logout">
                    @csrf
                        <button type="submit" class=" btn btn-dark col-12 flex-center">
                            <i class="fa-arrow-right-from-bracket fa-solid p-1 pt-3"></i>
                        </button>
                    </form>
                </div>
                @else
                    <a href="{{ route('login') }}" class="text-center" style="color: black">
                        <img class="loginimg pb-3" src="/images/loginbtn1.png" />
                        {{-- Log In --}}
                    </a>
                  
                @endauth
            </div>
        @endif
    </div>
</div>