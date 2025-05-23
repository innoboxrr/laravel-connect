<?php

namespace Innoboxrr\LaravelConnect\Policies;

use App\Models\User;
use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlatformConnectionPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {

        $exceptAbilities = [];

        if($user->isAdmin() && !in_array($ability, $exceptAbilities)){
        
            return true;
            
        }

    }

    public function index(User $user)
    {
        return false;
    }

    public function viewAny(User $user)
    {
        return false;
    }

    public function view(User $user, PlatformConnection $platformConnection)
    {
        return false;
    }

    public function create(User $user)
    {
        return false;
    }

    public function update(User $user, PlatformConnection $platformConnection)
    {
        return false;
    }

    public function delete(User $user, PlatformConnection $platformConnection)
    {
        return false;
    }

    public function restore(User $user, PlatformConnection $platformConnection)
    {
        return false;
    }

    public function forceDelete(User $user, PlatformConnection $platformConnection)
    {
        return false;
    }

    public function export(User $user)
    {
        return false;
    }

}
