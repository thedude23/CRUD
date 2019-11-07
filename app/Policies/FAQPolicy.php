<?php

namespace App\Policies;

use App\FAQ;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FAQPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any f a q s.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the f a q.
     *
     * @param  \App\User  $user
     * @param  \App\FAQ  $faq
     * @return mixed
     */
    public function view(User $user, FAQ $faq)
    {
        return in_array($user->role->name, [
            'admin']);
    }

    /**
     * Determine whether the user can create f a q s.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->role->name, [
            'admin']);
    }

    /**
     * Determine whether the user can update the f a q.
     *
     * @param  \App\User  $user
     * @param  \App\FAQ  $fAQ
     * @return mixed
     */
    public function update(User $user, FAQ $faq)
    {
        return in_array($user->role->name, [
            'admin']);
    }

    /**
     * Determine whether the user can delete the f a q.
     *
     * @param  \App\User  $user
     * @param  \App\FAQ  $fAQ
     * @return mixed
     */
    public function delete(User $user, FAQ $faq)
    {
        return in_array($user->role->name, [
            'admin']);
    }

    /**
     * Determine whether the user can restore the f a q.
     *
     * @param  \App\User  $user
     * @param  \App\FAQ  $fAQ
     * @return mixed
     */
    public function restore(User $user, FAQ $faq)
    {
        return in_array($user->role->name, [
            'admin']);
    }

    /**
     * Determine whether the user can permanently delete the f a q.
     *
     * @param  \App\User  $user
     * @param  \App\FAQ  $fAQ
     * @return mixed
     */
    public function forceDelete(User $user, FAQ $faq)
    {
        return in_array($user->role->name, [
            'admin']);
    }
}
