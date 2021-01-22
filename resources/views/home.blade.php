@extends('plantilla.plantilla')
@section('top')
@endsection
@section('contenedor')
<div class="publicacion">
    @foreach ($list_historias as $item)
        <div class="publicaciones">
            <div class="row img_info">
                <div class="col">
                    <img src="{{asset("images/terror.png")}}" style="border-radius: 15px;" height="120" width="120" alt="">
                </div>
                <div class="col" style="margin-left: -85px;">
                    <h5>{{$item->nombreHistoria}}</h5>
                    @foreach ($generos as $gene)
                        @if($gene->idHistoria == $item->nombreHistoria)
                            <small>
                                @if ($gene->terror != null)
                                    <span class="generos"><small> Terror </small></span>
                                @endif
                                @if ($gene->suspenso != null)
                                    <span class="generos"><small> Suspenso </small></span>
                                @endif
                                @if ($gene->suspenso != null)
                                    <span class="generos"><small> Fantasia </small></span>
                                @endif
                                @if ($gene->romance != null)
                                    <span class="generos"><small> Romance </small></span>
                                @endif
                                @if ($gene->drama != null)
                                     <span class="generos" > <small> Drama </small></span>
                                @endif
                                @if ($gene->historico != null)
                                    <span class="generos"><small> Historico </small></span>
                                @endif
                                @if ($gene->deportes != null)
                                    <span class="generos"><small> Deportes </small></span>
                                @endif
                                @if ($gene->accion != null)
                                    <span class="generos"><small> Accion </small></span>
                                @endif
                                @if ($gene->formativo != null)
                                    <span class="generos"><small> Formativo </small></span>
                                @endif

                            </small>
                        @endif
                    @endforeach
                    <br>
                    <strong>Capitulo: </strong>Capitulo IV<br>
                    <strong>Creador: </strong>  CorleoneX <br>
                    <i class="fa fa-heart"></i> 89
                </div>
            </div>
            <div class="row img_info">
                <div class="col-md-12 intro">
                    En este capitulos numero 4 solo estamos probando, no se emo...
                </div>
            <div class="ver"><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger leer_mas">Leer capitulo completo</a></div>
        </div> <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel" style="col-md-12">Terror en la sala <br>    <small>Capitulo IV</small></h4><br>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
@endsection
