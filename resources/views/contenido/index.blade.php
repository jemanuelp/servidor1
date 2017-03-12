@extends('layouts.main')
@section('main')
    <div class="row">
        <div class="col-md-12">
            <div class="search">
                <form action="/pelicula" method="GET" class="form-horizontal">
                    <div class="form-group">
                        <label for="buscar" class="control-label col-sm-offset-1">Peliculas</label>
                        <div class="input-group col-sm-offset-1 col-sm-10">
                            <input type="text" name="buscar" id="buscar" class="form-control" value="{{ request()->buscar }}" placeholder="buscar Peliculas">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-btn fa-search"></i>buscar</button>
                        </span>
                        </div>
                    </div>
                </form>
            </div>
            <IMG SRC="E:/Imagenes/imagenes1/AVPlayerHD_00.png">
            @if($pelicula->count())
                <div class="list-group">
                    @foreach($pelicula as $peli)
                        <a class="list-group-item">
                            <h4 class="list-group-item-heading">{{$peli->nombre}}</h4>
                            <IMG SRC="E:\Imagenes\imagenes1\AVPlayerHD_00.png">
                        </a>
                    @endforeach
                </div>
                <div class="text-center">
                    {!! $peli->render() !!}
                </div>
            @else
                <h3 class="text-center alert alert-info">No Hay Peliculas!</h3>
            @endif
        </div>
    </div>
@endsection