@extends('layouts.general')

@section('content')
    <div class="row"> 
        <div class="col-sm-">
            <form>
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
                    <input type="text" name="num_piezas" id="num_piezas" class="form-control">
                </div>
            </form>
        </div>

        
    </div>
@endsection