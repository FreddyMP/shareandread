@extends('plantilla.plantilla')
@section('top')
@endsection
@section('contenedor')
<div>
    <center>
        <a href="{{url('perfil')}}"><img src="{{asset('images/pp.jpg')}}" width="90%" alt=""></a>
    </center>
    <div class="row" style="margin-left:15px;">
        <div class="col">
            <i class="fa fa-star"></i>  <small>(45)</small>
        </div>
        <div class="col">
            <i class="fa fa-eye"></i> <small>(45)</small>
        </div>
        <div class="col">
            <i class="fa fa-book"></i> <small>(45)</small>
        </div>
    </div>
</div>
<hr>
<div>
    <center>
        <img src="{{asset('images/pp2.jpg')}}" width="90%" alt="">
    </center>
    <div class="row" style="margin-left:15px;">
        <div class="col">
            <i class="fa fa-star"></i>  <small>(45)</small>
        </div>
        <div class="col">
            <i class="fa fa-eye"></i> <small>(45)</small>
        </div>
        <div class="col">
            <i class="fa fa-book"></i> <small>(45)</small>
        </div>
    </div>
</div>
<hr>
@endsection