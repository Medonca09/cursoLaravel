<?php 

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.index');
    }
    public function entrar(Request $req)
    {
        $dados = $req->all();
        //necessario usar o intended para redirecionar as rotas com auth para URL desejada
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->intended('/admin/cursos');
            exit;
        }  
       
        //return redirect()->route('site.login');
    }
    public function sair(Request $request)
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}