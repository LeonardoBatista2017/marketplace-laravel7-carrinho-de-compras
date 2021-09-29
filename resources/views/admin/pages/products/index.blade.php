@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')

<h1>Produtos <a class="btn btn-primary" href="{{route('products.create')}}">ADD</a></h1>
<ol class="breadcrumb">
        
        <li class="breadcrumb-item active"><a href="{{ route('products.index') }}" class="active">Produtos</a></li>
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
                        <th>Preço</th>
                        <th>Loja</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                              {{$product->id}}
                            </td>
                            <td>
                                {{$product->nome}}
                            </td>
                            <td>
                               R$ {{number_format($product->valor,2,',','.')}}
                            </td>
                            <td>
                                {{$product->store->name}}
                            </td>
                            <td style="width=10px;">
                                <div class="btn-group">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{route('products.destroy',$product->id)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                                </form>
                                </div>
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