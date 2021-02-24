@extends('Layout.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h2>Projeto Laravel</h2>
    </div>
    <div class="col-md-4">
        <a class="btn btn-success" href="">Criar</a>    
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Moeda</th>
        <th>Data de criação</th>
        <th style="color:red">Ações</th>
    </tr>
    @foreach($projetos as $projeto)
    <tr>
        <td>{{$projeto->nome}}</td>
        <td>{{$projeto->endereco}}</td>
        <td>{{$projeto->telefone}}</td>
        <td>{{$projeto->moeda}}</td>
        <td>{{date_format($projeto->created_at,'yyyy MM dd')}}</td>
        <td>{{date_format($projeto->updated_at,'yyyy MM dd')}}</td>
        <td>
            <form action="{{route('projetos.destroy'. $projeto->id)}}" method="POST">
                <a href="{{route('projetos.show' . $projeto->id)}}" title="ver">
                    <i class="fa fa-eye text-success"></i>
                </a>

                <a href="{{route('projetos.edit' . $projeto->id)}}" title="editar">
                    <i class="fa fa-edit"></i>
                </a>
                
                @CSRF
                @method('DELETE')

                <button type="submit" title="deletar">
                    <i class="fas fa-trash text-danger"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection