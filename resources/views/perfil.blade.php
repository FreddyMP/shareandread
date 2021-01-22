@extends('plantilla.plantilla')
@section('top') 
@endsection
@section('contenedor') 
<center>
  <img src="{{asset('images/pp.jpg')}}" width="80%" alt="">
</center>
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
           <center> <strong> Prologo</strong> </center>
            {{$item->descripcion}}
          </div>
            <div class="alert alert-secondary" role="alert">
              <Strong>Capitulo: </Strong>  La odisea

            </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection