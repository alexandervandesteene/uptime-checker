<?php

namespace App\Policies;

use App\Models\check;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CheckPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, check $check)
    {
        return true;
    }

    public function create(User $user)
    {
        return false;
    }

    public function update(User $user, check $check)
    {
        return false;
    }

    public function delete(User $user, check $check)
    {
        return true;
    }
}
