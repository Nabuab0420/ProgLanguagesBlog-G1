
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class G1Controller extends Controller
{
    public function home(){
        return view('home');
    }
    public function post1(){
        return view('post1');
    }
    public function post2(){
        return view('post2');
    }
    public function post3(){
        return view('post3');
    }
    public function about(){
        return view('about');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('registration');
    }
}


?>