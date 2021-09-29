0 lines (16 sloc)  552 Bytes
  
@extends('adminlte::page')

@section('title', "Editar a Loja {$store->name}")

@section('content_header')
    <h1>Editar a Loja {{ $store->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('stores.update', $store->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <img src="{{asset('storage/'.$store->logo)}}" alt="">
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