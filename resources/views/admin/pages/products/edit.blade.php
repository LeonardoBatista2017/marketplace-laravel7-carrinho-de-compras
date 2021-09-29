0 lines (16 sloc)  552 Bytes
  
@extends('adminlte::page')

@section('title', "Editar o Produto {$product->nome}")

@section('content_header')
    <h1>Editar o Produto {{ $product->nome }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            @include('flash::message')
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf

                @include('admin.pages.products._partials.form')
            </form>
            <div class="row">
                @foreach($product->photos as $photos)
                <div class="col-4" text-center>
                    <img src="{{asset('storage/'.$photos->image)}}" alt="" class="img-fluid">
                    <form action="{{route('photo.remove')}}" method="POST">
                        <input type="hidden" name="photoName" value={{$photos->image}}>
                        @csrf
                        <button type="submit" class="btn btn-lg btn-danger">Remover</button>

                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection