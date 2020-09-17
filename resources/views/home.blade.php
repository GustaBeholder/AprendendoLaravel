@extends('layout.tamplate')

@section('titulo','Home')

@section('conteudo')
<div class="conteiner">
    <h3 class="center"> Lista de cursos</h3>
    <div class="row">
        @foreach ($cursos as $curso)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
            <img src="{{asset($curso->imagem)}}">
            </div>
            <div class="card-content">
                <h4>{{asset($curso->titulo)}}</h4>
                <p>{{asset($curso->descricao)}}</p>
            </div>
            <div class="card-action">
              <a href="#">Ver mais...</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    <div class="row">
      {{$cursos->links()}}
    </div>
</div>  
@endsection