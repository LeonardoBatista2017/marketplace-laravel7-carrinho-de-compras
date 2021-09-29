@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
<h1>Categorias <a class="btn btn-primary" href="{{route('categories.create')}}">ADD</a></h1>
    <ol class="breadcrumb">
        
        <li class="breadcrumb-item active"><a href="{{ route('categories.index') }}" class="active">Categorias</a></li>
    </ol>

    
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            @include('flash::message')
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th width="100">#</th>
                        <th>Nome</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                              {{$category->id}}
                            </td>
                            <td>
                                {{$category->name}}
                            </td>
                            
                            <td width="15%">
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{route('categories.destroy', ['category' => $category->id])}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
           
        </div>
    </div>
@stop