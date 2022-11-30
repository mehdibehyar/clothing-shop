<?php

namespace App\Http\Controllers\Admin\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \Illuminate\Support\Facades\Gate;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:show_users')->only(['index']);
        $this->middleware('can:create_user')->only(['create','store']);
        $this->middleware('can:edit_user')->only(['edit','update']);
        $this->middleware('can:delete_user')->only(['destroy']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::query();
        if ($search=\request('search')){
            $users->orWhere('name','LIKE',"%{$search}%")->orWhere('email','LIKE',"%{$search}%");
        }

        if (Gate::allows('show_staff_users')) {
            if (\request('admin')) {
                $users->where('SuperUser', 1)->orWhere('StaffUser', 1);
            }
        }else{
            $users->where('SuperUser', 0)->orWhere('StaffUser', 0);

        }

        $users=$users->paginate(1);
        return view('admin.users.all',compact('users'));
    }


    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $users=User::query()->paginate(1);
            return view('admin.users.page',compact('users'))->render();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'name'=>['required','string','max:255'],
            'email'=>['required','string','email','max:255','unique:users'],
            'password'=>['required','string','min:8','max:64','confirmed']
        ]);

        $user=User::create($data);
        if ($request->has('verify')){
            $user->markEmailAsVerified();
        }

        return redirect(route('admin.users.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data=$request->validate([
            'name'=>['required','string','max:250'],
            'email'=>['required','string','max:250',Rule::unique('users')->ignore($user->id)]

        ]);

        if (!is_null($request->password)){
            $request->validate([
                'password'=>['required','string','min:8','max:64','confirmed']
            ]);
            $data['password']=$request->password;
        }
        $user->update($data);

        if ($request->has('verify')){
            $user->markEmailAsVerified();
        }


        return redirect(route('admin.users.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
