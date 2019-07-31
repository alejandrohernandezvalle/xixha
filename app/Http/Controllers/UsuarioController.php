<?php

namespace xixha\Http\Controllers;
 
use Illuminate\Http\Request;
use xixha\Http\Requests;

use xixha\User;
use Illuminate\Support\Facades\Redirect;
use xixha\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        if ($request){
            $query = trim($request->get('searchText'));
            $usuarios = DB::table('users')
            ->where('name','LIKE','%'.$query.'%')  
            ->orwhere('email','LIKE','%'.$query.'%')  
            ->orderBy('id','desc') 
            ->paginate(5);
            return view('secs.index',['usuarios'=>$usuarios,'searchText'=>$query]);
        }
    }

    
    public function create(){
        return view("secs.create");
    }

    public function store(UsuarioFormRequest $request){
        $usuario = new User;
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->rol=$request->get('rol');
       // $usuario->remember_token();
        $usuario->save();
        
        return Redirect::to("secs");
    }

    public function edit($id){
        return view("secs.edit",["usuario"=>User::findOrFail($id)]);
    }

    public function update(UsuarioFormRequest $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->update();
        return Redirect::to("secs");
    }

    public function destroy($id){
        $usuario = DB::table('users')
        ->where('id','=', $id)
        ->delete();
        return Redirect::to("secs");
    }
}