@extends('Layout.app')
@section('content')
<div class="row">
    <div class="col-md-8">
       <h2>Adicionar novo</h2>     
    </div>

    <div class="col-md-4">
        <a class="btn btn-primary" href="{{route('projetos.index')}}" title="voltar">
            <i class="fa fa-backward"></i>">
     </div>
</div>

@if($erros->any())
<div class="alert alert-danger">
    <strong>Tem algum problema com seu input</strong> <br>
    <ul>
        @foreach($erros->any() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
