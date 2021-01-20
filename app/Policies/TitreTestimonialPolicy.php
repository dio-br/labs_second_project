<?php

namespace App\Policies;

use App\Models\TitreTestimonial;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TitreTestimonialPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TitreTestimonial  $titreTestimonial
     * @return mixed
     */
    public function view(User $user, TitreTestimonial $titreTestimonial)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TitreTestimonial  $titreTestimonial
     * @return mixed
     */
    public function update(User $user, TitreTestimonial $titreTestimonial)
    {
        return in_array($user->role_id,[2]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TitreTestimonial  $titreTestimonial
     * @return mixed
     */
    public function delete(User $user, TitreTestimonial $titreTestimonial)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TitreTestimonial  $titreTestimonial
     * @return mixed
     */
    public function restore(User $user, TitreTestimonial $titreTestimonial)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TitreTestimonial  $titreTestimonial
     * @return mixed
     */
    public function forceDelete(User $user, TitreTestimonial $titreTestimonial)
    {
        //
    }
}
