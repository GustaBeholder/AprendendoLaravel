@extends('layout.tamplate')

@section('titulo','Cursos')

@section('conteudo')
<div class="conteiner">
    <h3 class="center"> Lista de cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->titulo}}</td>
                <td>{{$registro->descricao}}</td>
                <td><img width="120" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"/></td>
                <td>{{$registro->publicado}}</td>
                <td>
                    <a class="btn deep-orange" href="{{route('admin.cursos.editar', $registrro->id)}}"> Editar</a> 
                    <a class="btn red" href="{{route('admin.cursos.deletar', $registrro->id)}}"> Editar</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
    </div >
    <div class="row">
    <a class=" btn blue" href="{{route('admin.cursos.adcionar')}}">Adcionar</a>
    </div>
</div>

    
@endsection