<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use App\traits\UploadTrait;
use App\Http\Requests\ProductRequest;
class ProdutoController extends Controller
{
    use UploadTrait;

    //obrigado a estar logado

    private $product;

    public function __construct(Produto $product)
    {
        $this->product = $product;
        $this->middleware('auth');
    }
        public function index()
    {
       // $products = $this->product->latest()->paginate();

        $userStore=auth()->user()->store;
        $products=$userStore->products()->paginate(10);

        return view('admin.pages.products.index', compact('products'));
    }

    public function create(){
        //$stores=\App\Models\Store::all(['id','name']);
        $categories=\App\Models\Category::all(['id','name']);
        return view('admin.pages.products.create',compact('categories'));
    }

    public function store( ProductRequest $request){
   
      $data = $request->all();

      $data['valor']=formatValorToDatabase($data['valor']);


      $store=auth()->user()->store;
      $product=$store->products()->create($data);
      $product->categories()->sync($data['categories']);
      
    if($request->hasFile('photos')){
        $images = $this->imageUpload($request->file('photos'),'image');
        $product->photos()->createMany($images);
    }

      flash('Produto Criado com sucesso')->success();
      return redirect()->route('products.index');
    }

    public function edit($product){
        $product=$this->product->find($product);
        $categories=\App\Models\Category::all(['id','name']);

      
        return view('admin.pages.products.edit', compact('product','categories'));
    }

    public function update(ProductRequest $request,$product){
        $data=$request->all();
        $categories = $request->get('categories', null);
        $product = $this->product->find($product);
       
       
        if(!is_null($categories)) {
            $product->categories()->sync($categories);
        }
        $product->update($data);
        if($request->hasFile('photos')){
            $images = $this->imageUpload($request->file('photos'),'image');
            $product->photos()->createMany($images); 
        }
        
        
        flash('Produto Atualizado com Sucesso')->success(); 
      
        return redirect()->route('products.index');
       }
   
       public function destroy($product){
        $product = $this->product->find($product);
        $product->delete();
        flash('Produto Removido com Sucesso!')->success();
           return redirect()->route('products.index');
       }

       
}
