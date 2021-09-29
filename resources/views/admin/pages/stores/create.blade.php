@extends('adminlte::page')

@section('title', 'Cadastrar Nova Loja')

@section('content_header')
<h1>Cadastrar Nova Loja </h1>
   

    
@stop

@section('content')
     <div class="card">
         <div class="card-body">
           <form action="{{ route('stores.store') }}" class="form" method="POST" enctype="multipart/form-data">
               @csrf
            
              
               <div class="form-group">
                <label>* Imagem logo:</label>
                <input type="file" name="logo" class="form-control @error('logo.*') is-invalid @enderror">
               @error('logo.*')
               <div class="invalid-feedback">
                   {{$message}}
               </div>
               @enderror
               </div>
            @include('admin.pages.stores._partials.form')

            
            
           </form>
         </div>
     </div>
@endsection