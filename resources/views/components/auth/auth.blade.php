
       
    
    <div class="d-flex align-items-center justify-content-between "> 
        <div class="rightHeader searchBarIcon flex-center pointerCursor " > 
            <input id="searchInput" class="bg-white" type="text" placeholder="search...">
            <i class="fa-solid fa-magnifying-glass " onclick="searchInputFocus()"></i> 
        </div> 
        @if (Route::has('login'))
        <div class="login-buttons-sm login-buttons mx-auto text-center d-flex justify-content-around" style="font-family: Times New Roman">
                @auth
                    <div href="{{ url('/') }}" class="h9">Hi, {{ auth()->user()->firstName }}!</div>
                    <form method="POST" action="/logout" class="mb-0">
                    @csrf
                        <button type="submit" class="btn col-5 flex-center">
                            <i class="fa-arrow-right-from-bracket fa-solid p-1"></i>
                        </button>
                    </form>
                @else
                <div class="searchBarIcon d-flex mx-3">
                    <a href="{{ route('login') }}" class="text-center" style="color: black">
                        <i class="fa-solid fa-circle-user"></i>
                    </a>
                </div>
                @endauth
            </div>
        @endif
    </div>

