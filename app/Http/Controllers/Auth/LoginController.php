<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\UserSpecification;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function login(Request $request){
        
        $employees = User::all()->where('code',$request->email);
        $users = User::all()->where('instEmail',$request->email);

        if($employees->isEmpty()){
            if($users->isEmpty()){
                dd("No existe un usuario con tal email o codigo");
            }else{
                $user = $users->first();
                if(Hash::check($request->password,$user->userSpecification->password)){
                    Auth::loginUsingId($user->id);
                    if(!$user->esEmpleado()){
                        return redirect()->intended('/user/index');
                    }
                }
            }
        }else{
            $user = $employees->first();
            if(Hash::check($request->password,$user->userSpecification->password)){
                Auth::loginUsingId($user->id);
                //Si ha entrado hasta aca es porqe es empleado , si no no llegaría hasta esta parte
                if($user->esEmpleado()){
                    return redirect()->intended('/admin/index');
                }
            }
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->intended('/');
    }
}
