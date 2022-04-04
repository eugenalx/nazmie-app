<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nazmie Hair Acad</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300&family=Raleway:wght@100;200;300&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&family=Manrope:wght@700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
       
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/customApp.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Playfair Display', sans-serif;
            font-weight: 400;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 80vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
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
            margin-bottom: 30px;
        }
        
        .dropdown>a {
            color: #000000;
            padding: 0 28px;
            margin-top: 25px;
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
            width:150px;
            text-align: left;
            line-height: 20px;
            background-color: #ebecf0;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 20px 5px 5px 10px;
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
        width: 100px;
        background: rebeccapurple;
        animation: "mymove" 2s infinite;
    }
    @keyframes mymove {
        from {left: -30px;}
        to {left: 300px;}
        }
        .custom-card-login{
            font-size: 70%;
            color: #6c757d;
            font-family: "Playfair Display";
            }

        
        .form-control::placeholder {
            color: #6c757d;
            opacity: 0.5;
            font-style: italic;
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

            


        @media screen and (min-width:990px){
            .stickyHeader{
                position: -webkit-sticky;
                position: sticky;
                top:0%;
                z-index: 999;
                min-height: 60px;
                margin-top: 20px;
            }

            .navbar{
                
                height:60px;
                margin-top: 20px;
            }
        }


            @media screen and (max-width:990px){
                .stickyHeader{
                    z-index: 999;
                    margin:0 auto;
                }
            }
       </style>
 
</head>

<body>
    <div>
        <div class="stickyHeader">
                <x-pages.header/>
        </div>
        <div class="col-sm-6 col-md-6 mx-auto align-self-center">
            <img src="/images/logo.jpg" style="width:60%;">
        </div>
                @yield("content")
        
                <x-pages.footer/>
    </div>
   
</body>
</html>