<h3> Essa é a view Index </h3>

@foreach($contatos as $contato)
    <p>{{$contato->nome }}</p>
    <p>{{$contato->telefone }}<p>
@endforeach