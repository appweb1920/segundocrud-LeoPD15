@extends('layouts.general')

@section('content')
    <div class="row">
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
        <div class="col-8">
            <h1>Piezas</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Costo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @if(!is_null($piezas))
                        @foreach($piezas as $p)
                        <tr>
                            <th scope="row">{{$p->id}}</th>
                            <td>{{$p->nombre}}</td>
                            <td>{{$p->descripcion}}</td>
                            <td>{{$p->num_piezas}}</td>
                            <td>${{$p->costo_pieza}}</td>
                            <td><a href="/piezas/edita/{{$p->id}}">Editar</a>/
                                <a href="/piezas/elimina/{{$p->id}}">Elimiar</a></td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        
    </div>
@endsection