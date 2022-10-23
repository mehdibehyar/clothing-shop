<?php

namespace App\Http\Controllers\Admin\users;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function create(User $user)
    {
        return view('admin.users.permissions',compact('user'));
    }

    public function store(User $user , Request $request)
    {

        $user->permissions()->sync($request->permissions);
        $user->roles()->sync($request->roles);

        return redirect(route('admin.users.index'));
    }

}
