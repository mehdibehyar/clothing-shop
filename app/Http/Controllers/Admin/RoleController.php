<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Product;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:show_roles')->only(['index']);
        $this->middleware('can:create_role')->only(['create','store']);
        $this->middleware('can:edit_role')->only(['edit','update']);
        $this->middleware('can:delete_role')->only(['delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::query();
        if ($search=\request('search')){
            $roles->orWhere('name','LIKE',"%{$search}%")->orWhere('label','LIKE',"%{$search}%");
        }


        $roles=$roles->paginate(10);
        return view('admin.roles.all',compact('roles'));
    }


    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $roles=Role::query()->paginate(10);
            return view('admin.roles.page',compact('roles'))->render();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>['required','string','max:255','unique:roles'],
            'label'=>['required','string','max:255'],
            'permissions'=>['array','required']
        ]);

        $role=Role::create($data);
        $role->permissions()->sync($data['permissions']);

        return redirect(route('admin.roles.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $data=$request->validate([
            'name'=>['required','string','max:250',Rule::unique('roles')->ignore($role->id)],
            'label'=>['required','string','max:250'],
            'permissions'=>['required','array']
        ]);
        $role->update($data);
        $role->permissions()->sync($data['permissions']);

        return redirect(route('admin.roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->back();
    }
}
