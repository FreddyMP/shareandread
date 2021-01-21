@extends('plantilla.plantilla')
@section('top') 
@endsection
@section('contenedor') 
<hr>
<div class="row">
    <div class="col">
    <a href="{{url('historias/create')}}" class="btn btn-danger btn_perfil_historia">Agregar historia</a>
        <a href="#" class="btn btn-danger btn_perfil_historia">Agregar Capitulo</a>
    </div>
</div>
<hr>
<div>
  <div class="accordion" id="accordionExample">
    @foreach ($list_historias as $item)
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{$item->id}}">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">   
            {{$item->nombreHistoria}}
          </button>
        </h2>
        <div id="collapse{{$item->id}}" class="accordion-collapse collapse " aria-labelledby="heading{{$item->id}}" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            {{$item->descripcion}}
          </div>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-danger">Ver</button>
            <button type="button" class="btn btn-danger">Publicar</button>
            <button type="button" class="btn btn-danger">Editar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection