<?php 

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /* protected $redirectTo = '/home'; */

    public function index()
    {
        //dd('teste');
        return view('login.index');
    }
    public function entrar(Request $req)
    {
        $dados = $req->all();
        //dd(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']]));
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('admin.cursos');
        }  

        return redirect()->route('login.index');
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}