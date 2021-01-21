@extends('plantilla.plantilla')
@section('top')
@endsection
@section('contenedor')
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Claribel  *Mensaje no leido
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <H5> <strong> Claribel:</strong><small> La concha de tu madrc </small> </H5>
            </div>
        </div>
    </div>
</div>
@endsection