<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nazmie Hair Acad</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300&family=Raleway:wght@100;200;300&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&family=Manrope:wght@700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->

    
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Playfair Display', sans-serif;
            font-weight: 400;
            width: 100vw;
            margin: 0; padding: 0%
        }
        /* .full-height {
            height: 80vh;
        } */

        .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        img {
            width: 100%;
            margin: 0 0 0 0;
            margin-right: auto;
            margin-left: auto;
            display: block;
        }
    /* display: block; eliminates default white space*/

        figure {
            margin: 0;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .content {
            text-align: center;
            font-family: 'Manrope'; 
            margin-top: 70px;
            /* border: solid; */
        }
        
        .content1 {
            text-align: right;
        }

        .title {
            font-size: 70px;
        }
        
        .m-b-md {
            /* margin-bottom: 30px; */
        }

        .dropdown {
            position: relative;
            display: inline;
            font-size: 0.9em;
            padding-bottom: 0;
        }
        
        .dropdown>a {
            color: #000000;
            padding: 0 28px;
            /* margin-top: 25px; */
            font-size: 19px;
            font-weight: initial;
            text-decoration: none;
            
        }
        
        .dropdown:hover>a{
            color: red;
            
            
        }
        
        .dropdown-staple {
            
            font-family: 'Manrope';
            position: absolute;
            display: none;
            /* width:150px; */
            text-align: left;
            line-height: 20px;
            background-color: #ebecf0;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 0 5px 0px 10px;
            z-index: 1;
        
        }
        
        .dropdown:hover .dropdown-staple {
            
            text-decoration: none;
            display: block;
        }
        
        img:hover{
            opacity: 50%;
        }
        .dropdown:active>a{
            color: orange;
        }
      
        .login-buttons {
            position: relative;
            font-family: "Playfair display";
            font-style: italic;
            text-align: right;
        }

        .loginimg {
        position: relative;
        width: 25px;
        top: 10px;
        padding-bottom: 10px;
        }


        .login-buttons > a {
        font-size: 80%;
        letter-spacing: 1px;

        text-decoration: none;
        color: #000;
        }
        .login-buttons-sm > a {
        font-size: 60%;
        letter-spacing: 1px;
        text-decoration: none;
        color: #000;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

    .opennav{
        top: 20px;
        right: 45px;
        font-size: 60px;
    }

    .loginSlide{
        /* width: 100px; */
        background: rebeccapurple;
        animation: "mymove" 2s infinite;
    }
    @keyframes mymove {
        from {left: -30px;}
        to {left: 300px;}
        }
        .custom-card-login{
            font-size: 0.8rem;
            color: #6c757d;
            font-family: "Playfair Display";
            }

        
        .form-control::placeholder {
            color: #6c757d;
            opacity: 0.5;
            font-style: italic;
            font-size: 0.8rem;
            }

        .custom-forgot-your-password{
            color: #6c757d;
            opacity: 0.8;
            font-style: italic;
            font-size: 90%;
        }
        .custom-btn{
            background-color: fuchsia
        }


        .navbar-toggler-icon {
            display: flex;
            width: 0.8em;
            height: 0.8em;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            
            }
            .dropdown-staple a{
                text-decoration: none;
            }

            .searchBarIcon{
                 /* border: 2px solid black; */
                ;                
                border-radius: 10px;
            }

             .rightHeader  input{
                width: 200px;
                border: none;
                font-size: 16px;
                color: gray;
                transform: translateX(100%) scaleX(0);
                border-radius: 15px;
                padding: 10px;
                padding-bottom: 12px;
                border-bottom: 1px solid gray;
                margin-right: 15px;
            }
input:focus{
    outline:none;
}
            
          
            .rightHeader{
                margin-right: 30px;
            }

            .active{
                display: block;
                animation: searchBar 1s ease-in-out;
                animation-fill-mode: both;
             }
            @keyframes searchBar {
                    0%{
                        transform: translateX(100%) scaleX(0);
                    }
                    100%{
                        transform: translate(0%) scale(1);
                    }
                }

                .pointerCursor{
                    cursor: pointer;
                }

                .aboutText{
                    font-family: 'Playfair Display';
                    font-size: 20px;
                    line-height: 30px;
                    letter-spacing: 0.05rem;
                    color: #000000;
                }
                .aboutText::first-letter{
                    font-size: 30px;
                    margin-left: 15px;
                    font-weight: 600;
                }


            


        @media screen and (min-width:990px){
            .stickyHeader{
                position: -webkit-sticky;
                position: sticky;
                top:0%;
                z-index: 999;
                min-height: 60px;
                margin-top: 20px;
            }

           
        }


            @media screen and (max-width:990px){
                .stickyHeader{
                    position: -webkit-sticky;
                    position: sticky;
                    top:0%;
                    z-index: 999;
                    margin-top: 20px;
                }               
            }

   

.h6{
    position:  relative;
    color: black;
    margin-top: 0px;
    top: 0px;
    font-family: 'Playfair display';
    font-weight: 400;
    font-size: 1rem;
}
.h9{
    font-size: 0.8rem;
}


.halfhexagon>svg{
    align-content: center;
    width: 370px; 
    height: 250px;
}

.halfhexagon>ol{
    position: relative;
    color: black;
    width: 370px;
    margin-left: -40px;
    margin-right: 0;
    margin-top: 70px;
    list-style-type: none;
    font-family: 'Caudex';
    font-weight: 400;
    font-size: 20px;
}

.halfhexagon ol li{
    line-height: 35px;
    margin-left: 0;
    padding-left: 0px;
}
       </style>
 
</head>

<body >

    
    <div class=''> 
        <div class="stickyHeader" >
            <x-header />
        </div> 

        {{ $slot }}
               
        
        {{-- <x-pages.footer/> --}}
    </div >
    @if (session()->has('succes'))
        <div class="bg-info col-2 fixed-bottom h9 justify-content-center m-3 mb-3 ms-auto pt-3 px-2 rounded">
            <p>{{ session('succes') }}</p>
        </div>
    @endif

    <script>
  
  function searchInputFocus1Out(){
    alert('removed');
    var element = document.getElementById('searchInput1');
    
    element.classList.remove('active'); 
  }

   function searchInputFocus1(){
    var element = document.getElementById('searchInput1');
    element.classList.toggle('active'); 
}

 function searchInputFocus(){
    var element = document.getElementById('searchInput');
    element.classList.toggle('active'); 
}
    </script>
   
</body>
</html>