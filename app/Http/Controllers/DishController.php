<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Dish;

class DishController extends Controller
{
    public function index(){
        $dishes = Dish::all();
        return view('custom.menu', compact('dishes'));
    }

    public function create(){
        return view('components.register-dish'); //Vista del formulario de registro
    }

    public function store(Request $request){
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price_normal' => 'required',
            'file' => 'required'
        ]);

        $dishes = new Dish();
        $dishes->category = $request->category;
        $dishes->name = $request->name;
        $dishes->description = $request->description;
        $dishes->price_normal = $request->price_normal;

        if($request->price_familiar != null)
            $dishes->price_familiar = $request->price_familiar;       
        
        $dishes->file = Storage::url($request->file('file')->store('public/images'));

    // public function store(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'number' => 'required',
    //         'email' => 'required',
    //         'subject' => 'required',
    //         'description' => 'required'
    //     ]);

        $notification = array(
            'message' => 'Plato Registrado',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
    //-----------------LISTAR POR CATEGORIA---------------------
    public function listOffers(Request $request){
        
                        ->orderBy('id', 'DESC')

         return view('custom.menu', compact('dishes'));
        
        $dishes = Dish::where('category','like', 'ofertas')
                        ->simplePaginate(9);
    }
    public function listPizzas(Request $request){
        
        $dishes = Dish::where('category','like', 'pizzas')
                        ->orderBy('id', 'DESC')
                        ->simplePaginate(9);

         return view('custom.menu', compact('dishes'));
        
    public function edit($id){
        //$products = Product::find($id);
        //return view('products.edit', compact('products'));
    }

    public function update(Request $request, $id){
        //$products = Product::find($id);
        //$products->update($request->all());
        //return redirect()->route('products.index');
    public function listPastas(Request $request){
        
        $dishes = Dish::where('category','like', 'pastas')
                        ->orderBy('id', 'DESC')
                        ->simplePaginate(9);

         return view('custom.menu', compact('dishes'));
        
    }

    public function destroy($id){
        $dishes = Dish::find($id);
        $dishes->delete();

        $notification = array(
            'message' => 'Plato Eliminado',
            'alert-type' => 'error'
        );

        return redirect()->route('home')->with($notification);
    public function listDrinks(Request $request){
        
        $dishes = Dish::where('category','like', 'bebidas')
                        ->orderBy('id', 'DESC')
                        ->simplePaginate(9);

         return view('custom.menu', compact('dishes'));
        
    }

    public function listExtra(Request $request){
        
        $dishes = Dish::where('category','like', 'adicionales')
                        ->orderBy('id', 'DESC')
                        ->simplePaginate(9);

         return view('custom.menu', compact('dishes'));
        
    }
}
