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

        $dishes->save();

        $notification = array(
            'message' => 'Plato Registrado',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
    }

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

    public function destroy($id){
        $dishes = Dish::find($id);
        $dishes->delete();

        $notification = array(
            'message' => 'Plato Eliminado',
            'alert-type' => 'error'
        );

        return redirect()->route('home')->with($notification);
    }
}
