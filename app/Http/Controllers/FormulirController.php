<?php

namespace App\Http\Controllers;

use App\Models\model_has_permissions;
use App\Models\Model_has_roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FormulirController extends Controller
{
    public function create()
    {
        $user = User::all();

        return view(
            'formulir.create',
            ['user' => $user]
        );
    }
    public function info()
    {
        $user = Auth::user();
        // dd($user);
        $model_has_roles = Model_has_roles::all();
        $role = model_has_permissions::query()
            ->join('permissions', 'permissions.id', '=', 'model_has_permissions.permission_id')
            // ->select('model_has_permissions.model_id')
            ->where('model_has_permissions.model_id', $user->id)->get();
        // dd($role);
        return view(
            'formulir.info',
            [

                'role' => $role,
                'user' => $user,
                'model_has_roles' => $model_has_roles,
            ]
            
        );
    }
}
