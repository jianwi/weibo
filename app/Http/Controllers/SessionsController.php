<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',[
            'only'=>['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request,[
            'email'=> 'required|max:255|email',
            'password'=> 'required'
        ]);
//        Auth::attempt($['email'=>$email等登录条件],remember是否记住用户) 'isDelete'=>0)
        if (\Auth::attempt($credentials,$request->has('remember'))){
            session()->flash('success','欢迎回来');
            $fallback = route('users.show',\Auth::user());
            return redirect()->intended($fallback);
        }else{
            session()->flash('danger', '很抱歉.您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        \Auth::logout();
        session()->flash('success','您已成功退出!');
        return redirect()->route('login');
    }
}
