<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:show_permissions')->only(['index']);
        $this->middleware('can:create_permission')->only(['create','store']);
        $this->middleware('can:edit_permission')->only(['edit','update']);
        $this->middleware('can:delete_permission')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions=Permission::query();
        if ($search=\request('search')){
            $permissions->orWhere('name','LIKE',"%{$search}%")->orWhere('label','LIKE',"%{$search}%");
        }


        $permissions=$permissions->paginate(10);
        return view('admin.permissions.all',compact('permissions'));
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $permissions=Permission::query()->paginate(10);
            return view('admin.permissions.page',compact('permissions'))->render();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
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
            'name'=>['required','string','max:255','unique:permissions'],
            'label'=>['required','string','max:255'],
        ]);

        Permission::create($data);

        return redirect(route('admin.permissions.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $data=$request->validate([
            'name'=>['required','string','max:250',Rule::unique('permissions')->ignore($permission->id)],
            'label'=>['required','string','max:250']

        ]);

        $permission->update($data);

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->back();
    }
}
