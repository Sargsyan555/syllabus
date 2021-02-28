<?php

namespace App\Traits;


trait HasPermissionsTrait
{


    public function hasRole($role)
    {
       return  auth()->user()->role === $role;
    }
}
