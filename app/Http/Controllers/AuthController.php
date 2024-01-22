<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(){
        return view('auth.auth');
    }

    public function postAuthRegister(Request $request){

        $data = $request->all();
        $user = User::where('email', $data['email'])->first();

        if(!$user){
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->phone = $request->phone;
            $newUser->password = bcrypt($request->password);
            $newUser->address = $request->address;
            $newUser->save();
            return redirect()-> route('client.auth')->with('message','Bạn đã tạo tài khoản thành công, vui lòng đăng nhập!');
        }else{
            return redirect()-> route('client.auth')->with('message','Tài khoản dã tồn tại!');
        }
    }

    public function postAuthLogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->status!=1){
                return redirect()->route('client.auth')->with('message','Tài khoản của bạn đã bị khóa!');
            }
            if(Auth::user()->role==1){
                return redirect()->route('home');
            }else{
                return redirect()->route('admin');
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('client.auth');
    }
}
