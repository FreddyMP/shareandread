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
        padding-top: 10px;
       }
       .comunication{
           margin-left: 3px;
           padding-bottom: 18px;
       }
       .contenedor{
           position: absolute;
           background-color: #eef5f7;
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
           background-color: #33193c;
           color:white;
           width: 94%;
       }
       .intro{
           width: 97%;
       }
       .img_perfil{
           padding-top: 10px;
       }
       .serch{
           background-color: rgb(231, 227, 245);
       }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="top">
        @yield('top')
        <div id="top" >
            <div class="row firs_line">
                <div class="col logo">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
                <div class="col">
                    <center>
                        <img class="img_perfil" src="{{asset('images/pp.jpg')}}" width="70" alt="">
                    </center>
                </div>
            </div>
            <hr>
            <div class="row comunication" >
                    <div class="col ">
                        Seguidores <i class="fa fa-star"></i>
                    </div >
                    <div class="col">
                        Seguidos <i class="fa fa-eye"></i>
                    </div>
                    <div class="col">
                        Mensajes <i class="fa fa-telegram"></i>
                    </div>
            </div>
            <input class="form-control serch" type="text" name="" id="" placeholder="Creador, historia o capitulo">

        </div>

    </div>
    <div class="contenedor">
        @yield('contenedor')
    </div>
   
</body>
</html>