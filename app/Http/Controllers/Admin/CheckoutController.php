<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index(){

        if(!auth()->check()){
            return redirect()->route('login');
        }
        $this->makePagSeguroSession();
       // var_dump(session()->get('pagseguro_session_code'));
        return view('checkout');
    }

    private function makePagSeguroSession(){
        if(!session()->has('pagseguro_session_code')){

      
        $sessionCode = \PagSeguro\Services\Session::create(
        \PagSeguro\Configuration\Configure::getAccountCredentials() );
            session()->put('pagseguro_session_code',$sessionCode->getResult());
         }
    }
}
