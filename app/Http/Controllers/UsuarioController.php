<?php

namespace xixha\Http\Controllers;
 
use Illuminate\Http\Request;
use xixha\Http\Requests;

use xixha\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use xixha\Http\Requests\UsuarioFormRequest;
use DB;
use Storage;
use Illuminate\Support\Str;

use xixha\Http\Controllers\Controller;
use xixha\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Database\Eloquent\Model; 

class UsuarioController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if ($request){
            //usuario=User::all();
            $query = trim($request->get('searchText'));
            $usuario = DB::table('users')
            ->select('id','name','email','rol','is_admin')

            //User
            ->where('name','LIKE','%'.$query.'%')
            ->where('rol','=','User') 
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','User')

            //Administrador
            ->orwhere('name','LIKE','%'.$query.'%')
            ->where('rol','=','Admin')
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','Admin')

            //Supervisor
            ->orwhere('name','LIKE','%'.$query.'%')
            ->where('rol','=','Super')
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','Super')
           
            //Inactivo
            ->orwhere('name','LIKE','%'.$query.'%')
            ->where('rol','=','Inactivo')
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','Inactivo')

            //Mr.Root
            ->orwhere('name','LIKE','%'.$query.'%')
            ->where('rol','=','Mr.Root')
            ->orwhere('email','LIKE','%'.$query.'%')
            ->where('rol','=','Mr.Root')
                       
            ->orderBy('id','desc') 
            ->paginate(8);  
            return view('secs.index',['usuario'=>$usuario,'searchText'=>$query]);
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
        $usuario->is_admin=$request->get('is_admin');    
        $usuario->remember_token=bcrypt(str_random($request->get('pin')));    
        //$usuario->last_login(DateTime());
        $usuario->save();        
        return Redirect::to("secs");
    } 

    public function edit($id){
        return view("secs.edit",["usuario"=>User::findOrFail($id)]);
    }

    public function update(UsuarioFormRequest $request, $id){
        $usuario = User::findOrFail($id);
        $usuario->name=$request->get('name');
        //$usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->is_admin=$request->get('is_admin');
        $usuario->rol=$request->get('rol');    
        $usuario->update();
        return Redirect::to("secs");
    }

    public function destroy($id){
        $usuario = User::findOrFail($id);       
        $usuario->is_admin = "0";
        $usuario->rol='Inactivo';
        $usuario->update();        
        return Redirect::to("secs");
    }
} 