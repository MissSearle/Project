<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/users', function (Request $request) {
    $query = $request->input('q');  // Get search query from request

    $users = User::select('id', 'name')
        ->when($query, function ($q) use ($query) {
            return $q->where('name', 'like', '%' . $query . '%');
        })
        ->limit(20)  // Limit to avoid overloading the response
        ->get();

    return response()->json($users);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
