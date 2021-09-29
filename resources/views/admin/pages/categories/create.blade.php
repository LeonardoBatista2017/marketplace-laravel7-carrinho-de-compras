@extends('adminlte::page')

@section('title', 'Cadastrar Novo Produto')

@section('content_header')
<h1>Cadastrar Novo Produto </h1>
   

    
@stop

@section('content')
     <div class="card">
         <div class="card-body">
           <form action="{{ route('categories.store') }}" class="form" method="POST">
               @csrf
            @include('admin.pages.categories._partials.form')
           </form>
         </div>
     </div>
@endsection