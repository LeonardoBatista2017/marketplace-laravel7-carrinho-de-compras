<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace L6</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <style>
        .front.row {
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('site.home')}}">Marketplace Lego</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup" >
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route('site.home')}}">Home</a>
              <a class="nav-link" href="#">Features</a>
              <a class="nav-link" href="#">Pricing</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            
           
                
            
            </div>
            <ul class="navbar-nav ">
                 @if(auth()->user() == false)
                <li class="nav-item">
               <a href="{{route('login')}}" class="btn btn-success">Entrar</a>
                </li>
                @endif
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault();
                                                          document.querySelector('form.logout').submit(); ">Sair</a>
                    <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                        @csrf
                    </form>
                </li>
                
                <li class="nav-item">
                    <span class="nav-link">{{auth()->user()->name}}</span>
                </li>
               @endauth
                <li class="nav-item">
                    <a href="{{route('cart.index')}}" class="nav-link">
                        @if(session()->has('cart'))
                        <span class="badge badge-danger">{{count(session()->get('cart'))}}</span>
                        @endif
                        <i class="fas fa-shopping-cart">Carrinho</i>
                    </a>
                </li>
            </ul>

            
          </div>
          
        </div>
      </nav>

           
               
            
   
<div class="container">
  
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    @yield('scripts')
    
</body>
</html>