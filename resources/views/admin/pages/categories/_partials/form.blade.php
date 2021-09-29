<div class="form-group">
    <label>Nome da Categoria:</label>
    <input type="text" name="name" value="{{ $category->name ?? old('name') }}" class="form-control" placeholder="Nome do Produto">
</div>
<div class="form-group">
 <label>Descrição da Categoria:</label>
 <input type="text" name="description" value="{{ $category->description ?? old('description') }}"class="form-control" placeholder="Descrição do Produto">
</div>
<div class="form-group">
    <label>Slug da Categoria:</label>
    <input type="text" class="form-control" name="slug" value="{{ $category->slug ?? old('slug') }}" placeholder="Valor do Produto">
</div>

<button type="submit" class="btn btn-primary">Criar Produto</button>