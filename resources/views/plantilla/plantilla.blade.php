<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
       .logo{
        padding-top: 20px;
       }
       i{
           color: brown;
       }
       .comunication{
           margin-left: 3px;
           padding-bottom: 18px;
       }
       .contenedor{
           position: absolute;
           background-color: white;
           padding-top: 5px;
           width: 100%;
           margin-top: 0px;
           height:auto;
           min-height: 100%;
       }
       .img_info{
        margin-left: 10px;
        margin-top: 15px;
       }
       .leer_mas{
           color:white;
           width: 94%;
       }
       .btn_perfil_historia{
           color:white;
           width: 45%;
           margin-left: 10px;
       }
       .intro{
           width: 97%;
       }
       .img_perfil{
           padding-top: 10px;
       }
       .serch{
           background-color: rgb(223, 217, 243);
       }
       .action_publicacion{
           margin-left: 10px;
       }
       .form-control{
           margin-top: 20px;
       }
       .btn-group{
           margin-left: 12%;
           margin-bottom: 20px;
       }
       .check_grupo{
           width: 30%;
           float: left;
       }
    </style>
    <title>Share&read</title>
</head>
<body>
    <div class="top">
        @yield('top')
        <div id="top" >
            <div class="row firs_line">
                <div class="col logo">
                    <a href="{{url('home')}}"> <img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>
                <div class="col">
                    <center>
                        <a href="{{url('perfil')}}"><img class="img_perfil" src="{{asset('images/pp.jpg')}}" width="70" alt=""></a>
                    </center>
                </div>
            </div>
            <hr>
            <div class="row comunication" >
                    <div class="col ">
                        <a href="{{url('seguidores')}}"> <center><i class="fa fa-star-o fa-2x"></i> <br> 34</center></a>
                    </div >
                    <div class="col">
                        <a href="{{url('seguidos')}}"><center> <i class="fa fa-newspaper-o fa-2x"></i> <br> 43</center></a>
                    </div>
                    <div class="col">
                        <a href="{{url('mensajes')}}"><center><i class="fa fa-telegram fa-2x"></i> <br> 10</center></a>
                    </div>
                    <hr>
            </div>
        </div>

    </div>
    <div class="contenedor">
        @yield('contenedor')
    </div>
   
</body>
</html>