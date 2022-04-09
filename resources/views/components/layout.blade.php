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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="{{ asset('./js/app.js') }}" defer></script>
        {{-- <script src="/js/app.js" ></script> --}}

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            .form-check-label{
                color: inherit;
                font-size: 15px;
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

        <div id="show" class="bg-black col-2 fixed-bottom h9 m-3 ms-auto rounded text-light">
            <p class="align-self-center mb-0 py-1 text-center">{{ session('succes') }}</p>
        </div>
    @endif

    <script>
        //  $(document).ready(function(){
        //             // window.fadeOutMessage = $("#show").delay(4000).fadeOut(1000);

        //             // let elem = document.getElementById('searchInput1');                        
        //             //     // console.log(elem.classList);
        //             //     // if ( !elem.classList.contains('active')){
        //             //     //     console.log(elem.classList);
        //                  $(window).on('scroll', function(){
        //             //             $('#searchInput1').removeClass('active');
        //             //          });
        //                 // };
        //                 // if ($(this).scrollTop() > 1000){
        //                 //     $('#searchInput1').removeClass('active');
        //                 // }
        //                 $('#searchInput1').removeClass('active');
        //                 // $('#searchInput').removeClass('active');
        //             });
        // });
        
// fadeOutMessage();
// test();


    </script>

</body>
</html>