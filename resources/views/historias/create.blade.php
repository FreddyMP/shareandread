@extends('../plantilla.plantilla')
@section('top')
@endsection
@section('contenedor')
<div style="width:90%; margin-left:5%;">
<h3> Crear nueva historia </h3>
@if (count($errors)>0)
<div>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Aqui falta algo!</strong> Verifica que todos los campos esten llenos
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
@if (isset($userTest))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <div>
        <strong>Listo!</strong> Ya puedes agregar capitulos a esta historia.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
<div>
        {!! Form::open(['url' => '/historias', 'files'=>true]) !!}

        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                {!!Form::text('nombreHistoria', $nombre = null, ['placeholder'=>'Nombre de la nueva historia', 'class' => 'form-control'])!!}
            </div>
            <div  class="col-md-12">
                {!!Form::hidden('creador', 'test')!!}
            </div>
            <div  class="col-md-12">
                {!!Form::hidden('likes', 0)!!}
            </div>
            <div  class="col-md-12">
                {!!Form::textarea('descripcion', $nombre = null, ['placeholder'=>'Descipcion de la Historia', 'class' => 'form-control'])!!}
            </div>
            <div  class="col-md-2">
                {!!Form::file('imagen',['style'=>'width:90%; margin-top:25px;'])!!}
            </div>
            <div  class="col-md-12">
                <br>
                <label for="">Generos</label> <br>
                <br>
                <div class="check_grupo">
                    <input  type="checkbox" class="form-check-input" value="Terro" name="terror" id=""> Terror <br>
                    <input  type="checkbox" class="form-check-input" value="Romance" name="romance" id=""> Romance <br>
                    <input type="checkbox" class="form-check-input" value="suspenso"name="suspenso" id=""> Suspenso 
                </div>
                <div class="check_grupo">
                    <input type="checkbox"class="form-check-input" value="historico" name="historico" id=""> Historico <br>
                    <input type="checkbox" class="form-check-input" value="Drama" name="drama" id=""> Drama <br>
                    <input class="form-check-input" type="checkbox" value="Deportes" name="deportes" id=""> Deportes 
                </div>
                <div class="check_grupo">
                    <input class="form-check-input" type="checkbox" value="Accion" name="accion" id=""> Accion <br>
                    <input class="form-check-input" type="checkbox" value="Formativo" name="formativo" id=""> Formativo
                </div>
            </div>
        </div> <br>
        <input class="btn btn-danger btn-lg" type="submit" value="Crear la nueva historia">
        {!! Form::close() !!}
</div>
@endsection