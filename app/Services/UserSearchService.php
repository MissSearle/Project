<?php

namespace App\Services;

use App\Models\User;

class UserSearchService
{
    /**
     * Search for users by name or email.
     *
     * @param string $query
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($query)
    {
        return User::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();
    }
}
