<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Headers\Notify\Notify;
use App\Models\Active_code;
use App\Models\User;
use App\Notifications\ActiveCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function loginGet()
    {
        return view('Auth.login');
    }

    public function loginPost(Request $request)
    {

        $data=$request->validate([
            'username'=>['required','exists:users,username'],
            'password'=>['required']
        ]);

        if (Auth::attempt($data)){
            return redirect(route('index'));
        }
        return back()->withErrors(['username'=>'فیل های وارد شده با هم متابقت ندارند']);

    }

    public function registerGet()
    {
        return view('Auth.register');
    }

    public function registerPost(Request $request)
    {
        $data=$request->validate([
            'username'=>['required','unique:users,username'],
            'phone'=>['required','unique:users,phone','regex:/^(?:98|\+98|0098|0)?9[0-9]{9}$/'],
            'password'=>['required','min:8','max:64'],
            'confirmation_password'=>['required','same:password']
        ]);

        $request->session()->flash('auth',$data);
        $code=Active_code::generateCode($data['username']);
        Notify::notifyCode($data['phone'],$code);
        return redirect(route('token'));
    }


    public function getToken(Request $request)
    {


        if (!$request->session()->has('auth')){
            return redirect('register');
        }
        $request->session()->reflash();
        return view('Auth.token');
    }

    public function postToken(Request $request)
    {
        if (!$request->session()->has('auth')){

            return redirect(route('register'));
        }
        $data=$request->validate([
            'token'=>['required'],
        ]);
        $userData=$request->session()->get('auth');
        if (Active_code::where('username',$userData['username'])->where('code',$data['token'])->first()){
            User::create($userData);
            Active_code::where('username',$userData['username'])->delete();
            alert()->success('موفقیت آمیز!','شما با موفقیت ثبت نام کردید.');
            return redirect(route('login'));
        }
        alert()->error('ناموفق','ثبت نام شما ناموقف بود.');
        return redirect(route('register'));




    }


}
