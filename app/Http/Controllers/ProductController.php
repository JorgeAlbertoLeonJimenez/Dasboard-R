<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Whoops\Run;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return $product;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id= $request->category_id;
        $product->save();
        return $product->all;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function products(Request $request)

{
    $product = product::all()->where('category_id',$request->id);
    return $product;
}

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
    }

    public function destroyToOrder($user_id, $id) {
        $orderDeleted = Order::where('user_id', $user_id)
                             ->where('id', $id)
                             ->delete();
        
        if ($orderDeleted) {
            // Realizar acciones adicionales si es necesario
            return response()->json(['message' => 'Pedido eliminado correctamente'], 200);
        } else {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        if ($product) {
            $product->delete();
            
        } else {
            return 'no se encontro el producto';
        }
        
        
    }
}