<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'editor','author','user']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post $post): bool
    {
        return $post->is_status || ($user && ($user->id == $post->user_id || in_array($user->role, ['admin', 'editor'])));

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin','editor','author']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post $post): bool
    {
        return $user->id == $post->user_id || in_array($user->role, ['admin','editor']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post $post): bool
    {
        return in_array($user->role, ['admin','editor']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function publish(User $user, Post $post): bool
    {
        return in_array($user->role, ['admin','editor']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return false;
    }

    public function pending_post(User $user): bool
    {

        return in_array($user->role, ['admin','editor']);
    }
}