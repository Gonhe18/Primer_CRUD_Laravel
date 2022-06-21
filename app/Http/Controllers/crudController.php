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
        return redirect()->route('crud.show',$productos);
    }

    public function show(){
        $productos = producto::paginate();
        return view('mostrar', compact('productos'));
    }

    public function unico($id){
        $productos = producto::find($id);
        return view('unico',compact('productos'));
    }

    public function edit(producto $productos){
        return view('editar', compact('productos'));
    }
    
    public function update(Request $request, producto $productos){
        $productos->name = $request->name;
        $productos->tipo = $request->tipo;
        $productos->descripcion = $request->descripcion;
        $productos->save();
        return redirect()->route('crud.unico',$productos);
    }

    public function destroy(producto $productos){
        $productos->delete();
        return redirect()->route('crud.show',$productos);
    }
};