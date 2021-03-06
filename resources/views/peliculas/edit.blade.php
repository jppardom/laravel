@extends('layouts.plantilla')

@section('title', 'Modificar Pelicula')

@section('content')
    <h1>Esta se podrá modificar datos de una pelicula</h1>
    
    <form action="{{route ('peliculas.update', $pelicula)}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <br> 
            <input type="text" name="nombre" value="{{old('nombre', $pelicula->nombre)}}">
            <br>
            @error('nombre')
                <small>{{$message}}</small>
            @enderror
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$pelicula->descripcion)}}</textarea>
            <br>
            @error('descripcion')
                <small>{{$message}}</small>
            @enderror
        </label>
        <br>
        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria" value="{{old('categoria',$pelicula->categoria)}}">
            <br>
            @error('categoria')
                <small>{{$message}}</small>
            @enderror
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
