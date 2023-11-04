@extends('index')

@section('contenido')
    <br/><h1>Cartelera</h1><br/>
   
        @foreach ($peliculas as $pelicula)
            <div class="contenido-pelicula">
                <div class="datos-pelicula">
                    <h2>{{ $pelicula->Titulo }}</h2><br/>
                    <p>{{ $pelicula->Sinopsis }}</p>
                    <br/>
                    <div class="boton-pelicula"> 
                        <a href="{{ route('pelicula', $pelicula->id) }}">
                            <img src="{{ asset('img/varios/btn-mas-info.jpg') }}" width="120" height="30" alt="Ver info"/>
                        </a>
                    </div>
                    <div class="boton-pelicula"> 
                        <a href="https://www.youtube.com/v/{{ $pelicula->Link }}" target="_blank">
                            <img src="{{ asset('img/varios/btn-trailer.jpg') }}" width="120" height="30" alt="Ver trailer"/>
                        </a>
                    </div> 
                </div>
                <img src="{{ asset('img/pelicula/' . $pelicula->id . '.jpg') }}" width="160" height="226"/><br/><br/>
            </div>
        @endforeach
    </div>
@endsection
