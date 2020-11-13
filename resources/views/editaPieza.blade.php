@extends('layouts.general')

@section('content')
    <div class="row">
        <div class="col-6" >
        <h1>Editando pieza</h1>
            <form action="/piezas/edita/update" method="POST">
            @csrf
                <input type="hidden" name="id" value="{{$pieza->id}}">
                <div class="form-group">
                    <label for="nombre">Nombre pieza</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$pieza->nombre}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea type="textarea" name="descripcion" id="descripcion" class="form-control" rows="3">{{$pieza->descripcion}}</textarea>
                </div>
                <div class="form-group">
                    <label for="num_piezas">Cantidad de piezas actual</label>
                    <input type="number" name="num_piezas" id="num_piezas" class="form-control"value="{{$pieza->num_piezas}}">
                </div>
                <div class="form-group">
                    <label for="costo_pieza">Costo por pieza</label>
                    <input type="number" name="costo_pieza" id="costo_pieza" class="form-control" step="0.01" value="{{$pieza->costo_pieza}}">
                </div>             
                <input type="submit" name="actualizar" value="actualizar" class="btn btn-primary">
            </form>
        </div>    
    </div>
@endsection