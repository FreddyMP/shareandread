@extends('plantilla.plantilla')
@section('top')
@endsection

@section('contenedor')
<div class="publicacion">
    <div class="publicaciones">
        <div class="row img_info">
            <div class="col">
                <img src="{{asset("images/terror.png")}}" height="120" width="120" alt="">
            </div>
            <div class="col" style="margin-left: -85px;">
                <h5>Terror en la sala</h5>
                <small>Terror, Suspenso </small><br>
                <strong>Capitulo: </strong>Capitulo IV<br>
                <strong style="color:#33193c">Creador: </strong>  CorleoneX <br>
                <i class="fa fa-heart"></i> 89
            </div>
        </div>
        <div class="row img_info">
            <div class="col-md-12 intro">En este capitulos numero 4 solo estamos probando, no se emo...</div>
            <div class="ver"><a href="#" class="btn btn leer_mas">Leer capitulo completo</a></div>
        </div>
    </div>
    <hr>
    <div class="publicaciones">
        <div class="row img_info">
            <div class="col">
                <img src="{{asset("images/romance.png")}}" height="120" width="120" alt="">
            </div>
            <div class="col" style="margin-left: -85px;">
                <h5>Amor en tiempo de olla</h5>
                <small>Romance</small><br>
                <strong>Capitulo: </strong> Capitulo IV<br>
                <strong style="color:#33193c">Creador: </strong>  CorleoneX <br>
                <i class="fa fa-heart"></i> 89
            </div>
        </div>
        <div class="row img_info">
            <div class="col-md-12 intro">En este capitulos numero 4 solo estamos probando, no se emo...</div>
            <div class="ver"><a href="#" class="btn btn leer_mas">Leer capitulo completo</a></div>
        </div>
    </div>
    <div class="publicaciones">
        <div class="row img_info">
            <div class="col">
                <img src="{{asset("images/romance.png")}}" height="120" width="120" alt="">
            </div>
            <div class="col" style="margin-left: -85px;">
                <strong style="color:#33193c">Creador: </strong>  CorleoneX <br>
                <strong>Genero: </strong>   Romance <br>
                <strong>Historia: </strong> Amor en tiempo de olla<br>
                <strong>Capitulo: </strong> Capitulo IV<br>
                <i class="fa fa-heart"></i> 89
            </div>
        </div>
        <div class="row img_info">
            <div class="col-md-12 intro">En este capitulos numero 4 solo estamos probando, no se emo...</div>
            <div class="ver"><a href="#" class="btn btn leer_mas">Leer capitulo completo</a></div>
        </div>
    </div>
</div>
@endsection
