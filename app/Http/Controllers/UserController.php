<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * AJAX User Search for Select2
     */
    public function ajaxSearch(Request $request)
    {
        $query = $request->get('q');

        $users = User::where('name', 'LIKE', '%' . $query . '%')->get();

        return response()->json($users);
    }
}
