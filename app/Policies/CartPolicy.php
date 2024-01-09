<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Cart;
use Illuminate\Auth\Access\HandlesAuthorization;

class CartPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Cart $cart)
    {
        // Users can view their own carts, and admins can view any cart
        return $user->id === $cart->user_id || $user->is_admin;
    }

    public function create(User $user)
    {
        // Any logged-in user can create a new cart
        return true;
    }

    public function update(User $user, Cart $cart)
    {
        // Users can update their own carts, and admins can update any cart
        return $user->id === $cart->user_id || $user->is_admin;
    }

    public function delete(User $user, Cart $cart)
    {
        // Users can delete their own carts, and admins can delete any cart
        return $user->id === $cart->user_id || $user->is_admin;
    }
}