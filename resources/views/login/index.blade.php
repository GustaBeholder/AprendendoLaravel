@extends('layout.tamplate')

@section('titulo','Fazer Login')

@section('conteudo')
<div class="conteiner">
    <h3 class="center"> Entrar no sistema</h3>
    <div class="row">
    <form class="" action="{{route('site.login.entrar')}}" method="post">
        {{csrf_field()}}
        <div class="input-field">
            <input type="text" name="email">
            <label>E-mail</label>
        </div>
        <div class="input-field">
            <input type="password" name="senha">
            <label>Senha</label>
        </div>
        
        <button class="btn deep-orange">Entrar</button>
    </form>
    </div>
</div>

    
@endsection