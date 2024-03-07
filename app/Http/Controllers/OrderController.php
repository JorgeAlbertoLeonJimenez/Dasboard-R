<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $user = User::find($id);
        if ($user) {
            $order = Order::where('user_id', $id)->first(); 
            return response()->json([
                'user' => $user,
                'order' => $order
            ], 200);
        } else {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addProductUser(Request $request)
    {
        $order = new Order();
        $order->name_product=$request->name_product;
        $order->price=$request->price;
        $order->count=$request->count; 
        $order->user_id=$request->user_id;
        $order->save();
        return $request->all();

    }
    public function getOrderUser() {
        $orders = Order::where('user_id', 1)
                       ->orderBy('created_at', 'desc')
                       ->get();
    
        $totalPrice = Order::where('user_id', 1)
                           ->sum('price');
    
        return [
            'orders' => $orders,
            'totalPrice' => $totalPrice
        ];
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
