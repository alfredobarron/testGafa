<?php

namespace App\Http\Controllers;

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

        return view('perfil', [
            'user' => $user,
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function perfilSave(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|string|max:100',
            'phone' => 'string|max:100',
        ]);
        $userId = Auth::id();

        Perfil::updateOrCreate([
            'id' => $userId,
        ], [
            'name'  => $request->get('name'),
            'phone' => $request->get('phone'),
        ]);

        return redirect()->back();
    }
}
