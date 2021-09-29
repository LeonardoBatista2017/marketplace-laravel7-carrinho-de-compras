@extends('adminlte::page')

@section('title', 'Cupons')

@section('content_header')
<h1>Cupons <a class="btn btn-primary" href="{{route('cupons.create')}}">ADD</a></h1>
    <ol class="breadcrumb">
        
        <li class="breadcrumb-item active"><a href="{{ route('cupons.index') }}" class="active">Cupons</a></li>
    </ol>

    
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th width="100">Imagem</th>
                        <th>Título</th>
                        <th width="190">Ações</th>
                    </tr>
                </thead>
                <tbody>
                   
                        <tr>
                            <td>
                              
                            </td>
                            <td></td>
                            <td style="width=10px;">
                               
                            </td>
                        </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
           
        </div>
    </div>
@stop