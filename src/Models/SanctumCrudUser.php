<?php

namespace Nomanur\SanctumCrud\Models;
use App\Models\User;

class SanctumCrudUser extends User {
    
    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles');
    }
    
}