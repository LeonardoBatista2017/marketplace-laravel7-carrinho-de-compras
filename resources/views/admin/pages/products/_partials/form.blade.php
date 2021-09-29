<div class="form-group">
    <label>Nome do Produto:</label>
    <input type="text" name="nome" value="{{ $product->nome ?? old('nome') }}" class="form-control" placeholder="Nome do Produto">
</div>
<div class="form-group">
 <label>Descrição do Produto:</label>
 <input type="text" name="descricao" value="{{ $product->descricao ?? old('descricao') }}"class="form-control @error('descricao') is-invalid @enderror" placeholder="Descrição do Produto">
 @error('descricao')
 <div class="invalid-feedback">
    {{$message}}
</div>
@enderror
</div>
<div class="form-group">
 <label>Valor do Produto:</label>
 <input type="text" class="form-control @error('valor') is-invalid @enderror" name="valor" id="valor"  value="{{ $product->valor ?? old('valor') }}" placeholder="Valor do Produto">
    @error('valor')
        <div class="invalid-feedback">
        {{$message}}
        </div>
    @enderror
</div>


<div class="form-group">
    <label>Slug do Produto:</label>
    <input type="text" class="form-control" name="slug" value="{{ $product->slug ?? old('slug') }}" placeholder="Slug do Produto">
   </div>

   <div class="form-group">
       <label>Categorias</label>
       <select name="categories" class="form-control">
        @foreach ($categories as $category )
        <option value="{{$category->id ?? old('id')}}">{{$category->name}}</option>
        @endforeach
      </select>
   </div>
<div class="form-group">
 <label>* Imagem:</label>
 <input type="file" name="photos[]" class="form-control @error('photos.*') is-invalid @enderror" multiple >
@error('photos.*')
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror
</div>
<div class="form-group">
 <label>Ativo:</label>
 <select name="ativo" class="form-control" value="{{ $product->ativo ?? old('ativo') }}">
     <option value="S">Sim</option>
     <option value="N">Não</option>
   </select>
</div>
<button type="submit" class="btn btn-primary">Criar Produto</button>