
<nav class="navbar navbar-expand-lg navbar-light bg-white d-lg-flex flex-center p-2 ">
    <div class=" col-12  d-flex d-lg-none  justify-content-between px-3">
        <button class="navbar-toggler align-self-center" type<button class="navbar-toggler align-self-start  col-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon d-block  "></div>
        </button>
         <div class="d-flex d-lg-none align-items-center justify-content-between">
            <div class="rightHeader searchBarIcon flex-center pointerCursor"  " > 
                <input id="searchInput" class="bg-white" type="text" placeholder="search...">
                <i class="fa-solid fa-magnifying-glass " onclick="searchInputFocus()""
               ></i> 
            </div> 
            <div class="rightHeader">
                <x-pages.auth.auth/>  
            </div>
         </div> 
     </div> 

     <div class="col-12 px-4 collapse navbar-collapse d-flex" id="navbarNavDropdown">
            <div class="offset-2 col-8 collapse navbar-collapse mx-auto " id="navbarNavDropdown">
            <div class=" navbar-nav">
                <div class="dropdown nav-item d-flex align-items-center">
                    <a class="" href="#" >Acasa</a>
                </div>
                <div class="dropdown nav-item d-flex align-items-center">
                    <a href="#" >Despre noi</a>
                </div>
                <div class="dropdown nav-item d-flex align-items-center">
                    {{-- <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> --}}
                        <a href="#">
                Salon</a>
                        {{-- <div class="dropdown-menu dropdown-staple" aria-labelledby="navbarDropdownMenuLink">

                            <p><a class="" href="#" >Servicii</a></p>
                            <p><a href="#" >Abonamente</a></p>
                            <p><a href="#" >Oferte speciale</a></p>
                        </div> --}}
                </div>
                <div class="dropdown d-flex align-items-center">
                    <a href="#">Academy</a>
                        {{-- <div class="dropdown-staple">
                            <p><a href="#">Cursuri</a></p>
                            <p><a href="#">Inscrieri</a><p>
                        </div> --}}
                </div> 
                <div class="dropdown d-flex align-items-center">
                        <a href="#">Contact</a>
                </div>        
                <div class="dropdown d-flex align-items-center">        
                        <a href="#">Blog</a>
                </div>      
            </div>
        </div> 
        <div class="align-items-center justify-content-around d-none d-lg-flex">
            <div class="rightHeader searchBarIcon flex-center pointerCursor"  " > 
                <input id="searchInput1" class="bg-white" type="text" placeholder="search...">
                <i class="fa-solid fa-magnifying-glass"  onclick="searchInputFocus1()"></i> 
            </div>
            <div class="rightHeader">
                <x-pages.auth.auth />     
            </div>
        </div>  
    </div>
        
    
</nav>

<script src="/js/app.js">

// function searchInputFocus1(){
//         var element = document.getElementById('searchInput1');
//         element.classList.toggle('active'); 
//     }

//        function searchInputFocus(){
//         var element = document.getElementById('searchInput');
//         element.classList.toggle('active'); 
//     }
</script>

  








