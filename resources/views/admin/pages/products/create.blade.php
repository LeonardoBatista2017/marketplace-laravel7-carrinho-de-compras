


@extends('layouts.app')

@section('content')
     <div class="card">
         <div class="card-body">
           <form action="{{ route('products.store') }}" class="form" method="POST" enctype="multipart/form-data">
               @csrf

               <div class="form-group">
                <!--<label>Lojas:</label>
                <select name="store" class="form-control">
                    foreach ($stores as $store )
                    <option value=""></option>
                    endforeach
                  </select>
               </div>-->
            

            @include('admin.pages.products._partials.form')
           </form>
         </div>
     </div>
@endsection

@section('scripts')
<script src="https://cdn.rawgit.com/plentz/jquery-maskmoney/master/dist/jquery.maskMoney.min.js">
  
  </script>
<script>$('#valor').maskMoney({prefix: 'R$',allowNegative:false, thousands:'.',decimal:','})</script>

@endsection

  
   