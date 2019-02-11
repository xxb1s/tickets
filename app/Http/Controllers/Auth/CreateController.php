<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CatModulo;
use App\Models\Role;

class CreateController extends Controller
{
    public function create()
    {
        return view('auth.create')
            ->with([
                'roles' => Role::all(),
                'modules' => CatModulo::all()
            ]);
    }
}
