@extends('layouts.general')

@section('content')
    <div class="row justify-content-between"> 
        <div class="col-4" >
        <h1>Agregar pieza</h1>
            <form action="/piezas/agrega" method="POST">
            @csrf
                <div class="form-group">
                    <label for="nombre">Nombre pieza</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea type="textarea" name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="num_piezas">Cantidad de piezas actual</label>
                    <input type="number" name="num_piezas" id="num_piezas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="costo_pieza">Costo por pieza</label>
                    <input type="number" name="costo_pieza" id="costo_pieza" class="form-control" step="0.01">
                </div>
                <input type="submit" name="agregar" value="Agregar" class="btn btn-primary">

            </form>
        </div>
        <div class="col-6">
            <h1>Piezas</h1>
        </div>
        
    </div>
@endsection