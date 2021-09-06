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



    // public function create(){
    //     return view('dish.create'); //Vista del formulario de registro
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'number' => 'required',
    //         'email' => 'required',
    //         'subject' => 'required',
    //         'description' => 'required'
    //     ]);

    //     $dishes = new Dish();
    //     $dishes->title = $request->title;
    //     $dishes->country = $request->country;
    //     $dishes->price = $request->price;
    //     $dishes->file = Storage::url($request->file('file')->store('public/images'));

    //     $dishes->save();

    //     return redirect()->route('products.index');
    // }

    // public function edit($id){
    //     $products = Product::find($id);
    //     return view('products.edit', compact('products'));
    // }

    // public function update(Request $request, $id){
    //     $products = Product::find($id);
    //     $products->update($request->all());
    //     return redirect()->route('products.index');
    // }

    // public function destroy($id){
    //     $products = Product::find($id);
    //     $products->delete();
    //     return redirect()->route('products.index');
    // }
    //-----------------LISTAR POR CATEGORIA---------------------
    public function listOffers(Request $request){
        
        $dishes = Dish::where('category','like', 'ofertas')
                        ->orderBy('id', 'DESC')
                        ->simplePaginate(9);

         return view('custom.menu', compact('dishes'));
        
    }
    public function listPizzas(Request $request){
        
        $dishes = Dish::where('category','like', 'pizzas')
                        ->orderBy('id', 'DESC')
                        ->simplePaginate(9);

         return view('custom.menu', compact('dishes'));
        
    }

    public function listPastas(Request $request){
        
        $dishes = Dish::where('category','like', 'pastas')
                        ->orderBy('id', 'DESC')
                        ->simplePaginate(9);

         return view('custom.menu', compact('dishes'));
        
    }

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
