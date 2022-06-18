<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function create(){
        return view('crear');
    }

    // Recuperamos los datos del formulario
    public function store(Request $request){
        $productos = new producto();
        $productos->name = $request->name;
        $productos->tipo = $request->tipo;
        $productos->descripcion = $request->descripcion;
        $productos->save();
        
    }

    public function show(){
        $productos = producto::paginate();
        return view('mostrar', compact('productos'));
    }

    public function unico($id){
        $productos = producto::find($id);
        return view('unico',compact('productos'));
        
    }

};