<?php

namespace App\Http\Controllers;

use App\User;
use App\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function perfil()
    {
        $user = Auth::user();

        $userProfile = User::with('profile')->where('id', $user->id)->first();

        return view('perfil', [
            'user' => $userProfile,
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function perfilSave(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:100',
            'phone' => 'string|max:100',
        ]);
        $userId = Auth::id();

        Perfil::updateOrCreate([
            'users_id' => $userId,
        ], [
            'users_id'  => $userId,
            'name'  => $request->name,
            'phone' => $request->phone,
        ]);

        return redirect()->back();
    }
}
