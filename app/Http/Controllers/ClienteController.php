<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function clientes()
    {
        $users = User::whereHas('profile', function ($query) {
            $query->where('name', '!=', null);
        })->get();

        return view('clientes', [
            'users' => $users,
        ]);
    }
}
