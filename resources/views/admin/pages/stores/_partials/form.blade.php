  <div class="form-group">
    <label>Nome da Loja:</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $store->name ?? old('name') }}" placeholder="Nome da Loja">
      @error('name')
      <div class="invalid-feedback">
        <h6>{{$message}}</h6>
      </div>
      @enderror
  </div>
  <div class="form-group">
 <label>Descrição da Loja:</label>
 <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $store->description ?? old('description') }}" placeholder="Descrição da Loja">
 @error('description')
 <div class="invalid-feedback">
   <h6>{{$message}}</h6>
 </div>
 @enderror
</div>
  <div class="form-group">
  <label>Telefone:</label>
  <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $store->phone ?? old('phone') }}" placeholder="Digite o Telefone">
  @error('phone')
      <div class="invalid-feedback">
        <h6>{{$message}}</h6>
      </div>
      @enderror
</div>
  <div class="form-group">
    <label>Celular/Whatsapp:</label>
   <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone" value="{{ $store->mobile_phone ?? old('mobile_phone') }}" placeholder="Digite o Celular">
   @error('mobile_phone')
   <div class="invalid-feedback">
     <h6>{{$message}}</h6>
   </div>
   @enderror
  </div>
   <div class="form-group">
    <label>Slug:</label>
   <input type="text" class="form-control" name="slug"  value="{{ $store->slug ?? old('slug') }}"  placeholder="Digite o Slug">
   </div>
   

   <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
