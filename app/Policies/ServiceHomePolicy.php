<?php

namespace App\Policies;

use App\Models\ServiceHome;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceHomePolicy
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
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return mixed
     */
    public function view(User $user, ServiceHome $serviceHome)
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
        return in_array($user->role_id, [1,2]);

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return mixed
     */
    public function update(User $user, ServiceHome $serviceHome)
    {
        return in_array($user->role_id, [1,2]);

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return mixed
     */
    public function delete(User $user, ServiceHome $serviceHome)
    {
        return in_array($user->role_id, [1,2]);

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return mixed
     */
    public function restore(User $user, ServiceHome $serviceHome)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ServiceHome  $serviceHome
     * @return mixed
     */
    public function forceDelete(User $user, ServiceHome $serviceHome)
    {
        //
    }
}
