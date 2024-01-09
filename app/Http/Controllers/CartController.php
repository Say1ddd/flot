<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Inertia\Inertia;
use App\Policies\CartPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->isAdmin()) {
            $carts = Cart::all();
        } else {
            $carts = Cart::where('user_id', $user->id)->get();
        }

        return Inertia::render('Cart/Index', [
            'cart' => $cart,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Cart::class);
        
        return Inertia::render('Cart/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user->isAdmin()) {
            // Store the cart
        } else {
            // Store the cart with the user_id
        }

        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        $user = Auth::user();
        if ($user->isAdmin() || $cart->user_id == $user->id) {
            // Show the cart
        } else {
            // Unauthorized access
        }

        return Inertia::render('Carts/Show', [
            'cart' => $cart,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        $user = Auth::user();
        if ($user->isAdmin() || $cart->user_id == $user->id) {
            // Show the edit form
        } else {
            // Unauthorized access
        }

        return Inertia::render('Carts/Edit', [
            'cart' => $cart,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        $user = Auth::user();
        if ($user->isAdmin() || $cart->user_id == $user->id) {
            // Update the cart
        } else {
            // Unauthorized access
        }

        return redirect()->route('carts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $user = Auth::user();
        if ($user->isAdmin() || $cart->user_id == $user->id) {
            // Delete the cart
        } else {
            // Unauthorized access
        }

        return redirect()->route('carts.index');
    }
}
