@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
@if(!$store)
<h1>Lojas <a class="btn btn-primary" href="{{route('stores.create')}}">ADD</a></h1>
@endif

<div class="card">
    <div class="card-header">
        @include('flash::message')
    </div>
    <div class="card-body">
        <table class="table table-striped">
    <thead>
        <tr>
            <th>
                   #
            </th>

            <th>
                Loja
            </th>

            <th>
                 Ações
            </th>
        </tr>
    </thead>
    <tbody>
       
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->name}}</td>
            <td style="width=10px;">
                
                <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-info">Editar</a>
                <a href="{{ route('stores.destroy', $store->id) }}" class="btn btn-danger">Deletar</a>
            </td>
        </tr>

    </tbody>
</table>
    </div>
</div>



@endsection