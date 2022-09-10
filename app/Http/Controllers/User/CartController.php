<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user = User::findOrFail(Auth::id());
        $products = $user->products;
        $totalPrice = 0;

        foreach ($products as $product) {
            $totalPrice = $product->price * $product->pivot->quantity;
        }

        return view('user.cart.index', compact('products', 'totalPrice'));
    }

    /**
     * Add the specified resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request) {
        $itemInCart = Cart::where('product_id', $request->product_id)
            ->where('user_id', Auth::id())
            ->first();

        if ($itemInCart) {
            $itemInCart->quantity += $request->quantity;
            $itemInCart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('user.cart.index');
    }
}