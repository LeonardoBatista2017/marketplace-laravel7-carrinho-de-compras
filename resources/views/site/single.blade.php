@extends('layouts.front')
@section('content')
<div class="row">
    <div class="col-12"> @include('flash::message')</div>
   
</div>
<div class="row">
    
    <div class="col-6">
        @if($product->photos->count())
        <img src="{{asset('storage/'.$product->photos->first()->image)}}" alt="" class="card-img-top">
        <div class="row" style="margin-top: 10px;">
            @foreach($product->photos as $photo)
            <div class="col-2">
                <img src="{{asset('storage/'.$photo->image)}}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>
            
        @else
        <img src="{{asset('assets/img/no-photo.jpg')}}" alt="" class="card-img-top">
        @endif
    </div>
    <div class="col-6">
    <div class="col-md-12">
<div>
    <h2>{{$product->nome}}</h2>

<h3>R$ {{number_format($product->valor,'2',',','.')}}</h3>

<span>Loja: {{$product->store->name}}</span>
</div>
<div class="product-add col-md-12">
    <hr>
    <form action="{{route('cart.add')}}" method="POST">
        @csrf
        <input type="hidden" name="product[name]" value="{{$product->nome}}">
        <input type="hidden" name="product[price]" value="{{$product->valor}}">
        <input type="hidden" name="product[slug]" value="{{$product->slug}}">
        <div class="form-group">
            <label for="">
                Quantidade
            </label>
            <input type="number" name="product[amount]" class="form-control" value="1">
        </div>
          <button href=""  class="btn btn-lg btn-danger">Comprar</button>
    </form>
</div>
    </div>
    </div>
   
</div>

<div class="row">
    <hr>
    <div class="col-12"><p>{{$product->descricao}}</p></div>
    
</div>


@endsection