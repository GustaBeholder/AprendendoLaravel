@extends('layout.tamplate')

@section('titulo','Adcionar Cursos')

@section('conteudo')
<div class="conteiner">
    <h3 class="center"> Adcionar cursos</h3>
    <div class="row">
    <form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.cursos._form')
        <button class="btn deep-orange">Salvar</button>
        </form>
    </div>
</div>

    
@endsection